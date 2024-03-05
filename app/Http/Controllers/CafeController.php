<?php

namespace App\Http\Controllers;

use App\Models\cafe;
use App\Http\Requests\StorecafeRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatecafeRequest;

class CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cafe = cafe::all();

        return view('admin.cafe.index',compact('cafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cafe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecafeRequest $request)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/foto',$foto->hashName());

        cafe::create([

            'cafe' => $request->cafe,
            'alamat' => $request->alamat,
            'telephone' => $request->telephone,
            'jam' => $request->jam,
            'deskripsi' => $request->deskripsi,
            'rating' => $request->rating,
            'harga' => $request->harga,
            'gambar1' => $foto->hashName(),

        ]);

        return redirect()->route('cafe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cafe $cafe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cafe = cafe::findOrFail($id);

        return view('admin.cafe.edit',compact('cafe'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecafeRequest $request,$cafe)
    {

    $cafe = cafe::findOrFail($cafe);

        if ($request->hasFile('foto')){

            Storage::delete($cafe->gambar1);
            $foto = $request->file('foto');
            $foto->storeAs('public/foto',$foto->hashName());
    
            $cafe->update([
    
                'cafe' => $request->cafe,
                'alamat' => $request->alamat,
                'telephone' => $request->telephone,
                'jam' => $request->jam,
                'deskripsi' => $request->deskripsi,
                'rating' => $request->rating,
                'harga' => $request->harga,
                'gambar1' => $foto->hashName(),
    
            ]);
    
        }else{
          $cafe->update([
    
                'cafe' => $request->cafe,
                'alamat' => $request->alamat,
                'telephone' => $request->telephone,
                'jam' => $request->jam,
                'deskripsi' => $request->deskripsi,
                'rating' => $request->rating,
                'harga' => $request->harga,
             
    
            ]);


            }

            return redirect()->route('cafe.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cafe)
    {
        $cafe = cafe::findOrFail($cafe);
        Storage::delete($cafe->gambar1);
        $cafe->delete();

        return redirect()->route('cafe.index');


    }
}
