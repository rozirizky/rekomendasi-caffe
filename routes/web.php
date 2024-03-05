<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UlasanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');
 
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::prefix('admin')->middleware(['auth','useraccess:admin'])->group(function () {
  
    Route::get('/dashboard',[HomeController::class, 'admin'])->name('dashboard');
        
Route::resource('cafe',CafeController::class);

Route::get('ulasan',[UlasanController::class, 'index'])->name('ulasan');

Route::get('user',[UserController::class,'index'])->name('user');


        
});

Route::middleware('guest')->group(function(){


Route::get('login',function(){
return view('auth.login');
})->name('login');

Route::get('register',function(){
    return view('auth.register');
    })->name('register');

Route::post('register',[UserController::class, 'register'])->name('register.store');
});
Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::get('blog',[HomeController::class,'index'])->name('blog');
Route::get('blog/detail/{detail}',[HomeController::class,'detail'])->name('detail');
Route::post('login',[UserController::class, 'login'])->name('login.store');

Route::post('ulasan',[UlasanController::class, 'store'])->name('ulasan.store');
