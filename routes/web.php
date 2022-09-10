<?php

use App\Http\Controllers\customer\JobController;
use App\Http\Controllers\freelance\ResumeController;
use App\Http\Controllers\authentification\SocialController;
use App\Http\Controllers\authentification\UserController;
use App\Http\Controllers\authentification\VerifyEmailController;
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

});
Route::view('/', 'welcome')->name('welcome');

Route::view('/login', 'authentification.login')->name('login.view');
Route::view('/signup', 'authentification.signUp')->name('signup.view');
Route::group(['middleware' => 'auth','what:1'], function () {//freelance
    Route::view('/addResume', 'freelance.add-resume')->name('resume.index');
    Route::get('/manageResume', [ResumeController::class, 'resume'])->name('resume.manage');
    Route::post('/addresumepost', [ResumeController::class, 'store'])->name('resume.add');
});
Route::group(['middleware' => 'auth','what:2'], function () {
    //customer
    Route::view('/addJob', 'customer.add-job')->name('job.index');
    Route::get('/managejob', [JobController::class,'resume'])->name('job.manage');
    Route::get('/browsemanagejob', [JobController::class,'browsejob'])->name('job.browse');
    Route::post('/addJobpost', [JobController::class, 'store'])->name('job.add');
});
