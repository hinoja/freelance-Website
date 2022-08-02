<?php

use App\Http\Controllers\GithubConntroller;
use App\Http\Controllers\GoogleConntroller;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;

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


    Route::group(['middleware'=>'auth'],function()
    {

        Route::get('/deconnecté',[UserController::class,'logout'])->name("logout");
        Route::get('/connecté',[UserController::class,'connected'])->name("dashboard");
    });

Route::post('login',[UserController::class,'authenticate'])->name("login");
Route::post('/signup',[UserController::class,'signup'])->name("signup");




//login with github
Route::get('/auth/redirect/github',[GithubConntroller::class,'redirectgit'])->name('login.github');
Route::get('/auth/callback/github',[GithubConntroller::class,'callbackgit']);

//login with google
Route::get('/auth/redirect/google',[GoogleConntroller::class,'redirectgoogle'])->name('login.google');

Route::get('auth/callback/github',[GoogleConntroller::class,'callbackgoogle']);


