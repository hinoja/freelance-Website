<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ResumeController;
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
                ->middleware('auth')
                ->name('verification.notice'); //The Email Verification Notice send
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'fullfill'])
                ->middleware(['auth', 'signed'])
                ->name('verification.verify'); //The Email Verification link

Route::group(['middleware' => 'auth'], function () {
    Route::get('/deconnecte', [UserController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'guest'], function () {
    //login with driver
    Route::get('/auth/redirect/{driver}', [SocialController::class, 'redirect'])->name('SocialRedirect');
    Route::get('/auth/callback/{driver}', [SocialController::class, 'callback'])->name('SocialCallback');
    Route::post('/loginpost', [UserController::class, 'authenticate'])->name('login');
    Route::post('/signup', [UserController::class, 'signup'])->name('signup');
    Route::get('/', [ResumeController::class, 'index'])->name('index');
});

Route::view('/login', 'login')->name('login.view');
Route::view('/signup', 'signUp')->name('signup.view');
Route::view('/job', 'welcome')->name('job');
Route::group(['middleware' => 'customer'], function () {
});


Route::view('/addResume', 'add-resume')->middleware('freelance')->name('resume.index');
Route::get('/manageResume', [ResumeController::class, 'resume'])->middleware('freelance')->name('resume.manage');
Route::post('/addresumepost', [ResumeController::class, 'store'])->middleware('freelance')->name('resume.add');

//job
Route::view('/addJob', 'jobs.add-job')->name('job.index');
Route::post('/addJobpost', [JobController::class, 'store'])->middleware('auth')->name('job.add');
