<?php

use App\Http\Controllers\authentification\SocialController;
use App\Http\Controllers\authentification\UserController;
use App\Http\Controllers\authentification\VerifyEmailController;
use App\Http\Controllers\customer\JobController;
use App\Http\Controllers\freelance\ProfileController;
use App\Http\Controllers\freelance\ResumeController;
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


Route::get('/showjob/{id}', [JobController::class, 'show'])->name('job.show');
Route::group(['middleware' => 'guest'], function () {
    //login with driver
    Route::get('/auth/redirect/{driver}', [SocialController::class, 'redirect'])->name('SocialRedirect');
    Route::get('/auth/callback/{driver}', [SocialController::class, 'callback'])->name('SocialCallback');
    Route::post('/loginpost', [UserController::class, 'authenticate'])->name('login');
    Route::post('/signup', [UserController::class, 'signup'])->name('signup');
});
Route::get('/', [JobController::class, 'index'])->name('welcome');

Route::view('/login', 'authentification.login')->name('login.view');
Route::view('/signup', 'authentification.signUp')->name('signup.view');

//freelance
Route::group(['middleware' => ['auth', 'checkRole:1']], function () {
    Route::post('/profile', [ProfileController::class, 'store'])->name('freelance.profile.post');
    Route::view('/profile', 'freelance.updateProfile')->name('freelance.profile.view');
});

Route::middleware(['auth', 'checkRole:1'])->name('resume.')->group(function () {
    Route::view('/addResume', 'freelance.add-resume')->name('index');
    Route::controller(ResumeController::class)->group(function () {
        Route::get('/manageResume', 'resume')->name('manage');
        Route::post('/addresumepost', 'store')->name('add');
    });
});
//customer
Route::middleware(['auth', 'checkRole:2'])->name('job.')->group(function () {
    Route::view('/addJob', 'customer.add-job')->name('index');

    Route::controller(JobController::class)->group(function () {
        Route::get('/managejob', 'resume')->name('manage');
        Route::post('/addJobpost', 'store')->name('add');
    });
});

Route::get('/moreJob', [JobController::class, 'browsejob'])->name('more.job');
