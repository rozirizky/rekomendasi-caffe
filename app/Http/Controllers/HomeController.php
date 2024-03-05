<?php

namespace App\Http\Controllers;

use App\Models\cafe;
use App\Models\ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function admin(){
        $ulasan =  ulasan::all()->count();
        $cafe =  cafe::all()->count();
        $user =  User::all()->count();

        return view('admin.dashboard',compact('ulasan','cafe','user'));


    }
    public function index()  {
        $cafe = cafe::all();
        return view('blog', compact("cafe"));
        
    }

    public function detail(string $id){

$ulasan = ulasan::where('cafe_id','=',$id)->get();
        $cafe = cafe::findOrFail($id);
        return view('detail',compact('cafe','ulasan'));


    }
}
