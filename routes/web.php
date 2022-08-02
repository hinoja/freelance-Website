<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});


Route::post('login',[UserController::class,'authenticate'])->name("login");
Route::post('/signup',[UserController::class,'signup'])->name("signup");
Route::get('/deconnecté',[UserController::class,'logout'])->name("logout");
Route::get('/connecté',[UserController::class,'connected'])->name("dashboard");






