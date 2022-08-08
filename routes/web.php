<?php

use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyEmailController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

    Route::post('/email/verification-notification', [VerifyEmailController::class, 'resendEmail'])
                    ->middleware(['auth', 'throttle:6,1'])
                    ->name('verification.send'); //Resending The Verification Email
    Route::get('/email/verify', [VerifyEmailController::class, 'verify'])
                    ->middleware('auth')->name('verification.notice'); //The Email Verification Notice send
    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'fullfill'])
                    ->middleware(['auth', 'signed'])
                    ->name('verification.verify'); //The Email Verification link
    Route::view('/', 'welcome')->name('index');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/deconnecte', [UserController::class, 'logout'])->name('logout');
        // Route::get('/connecte',[UserController::class,'connected'])->name('dashboard');
        Route::view('/fulldisconnect', 'disconnect')->name('logoutfull');
    });
    Route::group(['middleware' => 'guest'], function () {
        Route::view('/login', 'login')->name('login.view');
        Route::view('/signup', 'signUp')->name('signup.view');
        Route::post('/login', [UserController::class, 'authenticate'])->name('login');
        Route::post('/signup', [UserController::class, 'signup'])->name('signup');
    });
    //login with driver
Route::get('/auth/redirect/{driver}', [SocialController::class, 'redirect'])->name('SocialRedirect');
Route::get('/auth/callback/{driver}', [SocialController::class, 'callback'])->name('SocialCallback');
