<?php

use App\Http\Controllers\GithubConntroller;
use App\Http\Controllers\GoogleConntroller;
use App\Http\Controllers\SocialController;
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
| contains the 'web' middleware group. Now create something great!
|
*/
    Route::group(['middleware'=>'auth'],function()
    {
        Route::get('/deconnecte',[UserController::class,'logout'])->name('logout');
        Route::get('/connecte',[UserController::class,'connected'])->name('dashboard');
      Route::view('/fulldisconnect','disconnect')->name('logoutfull');
    });
    Route::group(['middleware'=>'guest'],function()
    {
        Route::get('/',function(){ echo "BIenvenue";});
        Route::view('/login','login');
        Route::view('/signup','signup');
        Route::post('/login',[UserController::class,'authenticate'])->name('login');
        Route::post('/signup',[UserController::class,'signup'])->name('signup');
    });
    //login with driver
Route::get('/auth/redirect/{driver}', [SocialController::class,'redirect'])->name('SocialRedirect');
Route::get('/auth/callback/{driver}', [SocialController::class,'callback'])->name('SocialCallback');

