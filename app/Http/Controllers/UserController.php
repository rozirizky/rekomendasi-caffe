<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return view('admin.user',compact('users'));

    }
    public function Logout(){
        Auth::logout();
        return redirect()->route('home');
        
    }
    
    public function register(Request $request){

        $request->validate([
            'password' => 'required|confirmed|min:6',
            'email' => 'required|email',
            'password_confirmation' => 'required',
            'name' => 'required'
        ]);

        $password = Hash::make($request->password);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);

        return redirect('/');
    }

    public function login(Request $request){
       $credential =  $request->validate([
            'password' => 'required',
            'email' => 'required|email',
            
        ]);

        if(Auth::attempt($credential)){
            if (auth()->user()->type == 'admin') {
            return redirect()->route('dashboard');

            }elseif(auth()->user()->type == 'user'){
                return redirect()->route('home');

            }else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    }
}
}
