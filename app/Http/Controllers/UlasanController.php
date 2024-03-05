<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use App\Http\Requests\StoreulasanRequest;
use App\Http\Requests\UpdateulasanRequest;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $ulasan =  ulasan::all();
        return view('admin.ulasan', compact('ulasan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreulasanRequest $request)
    {
        ulasan::create([
            'ulasan' => $request->ulasan,
            'cafe_id' => $request->id,
            'user' => auth()->user()->name,
            'rating' => $request->rating,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ulasan $ulasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ulasan $ulasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateulasanRequest $request, ulasan $ulasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ulasan $ulasan)
    {
        //
    }
}
