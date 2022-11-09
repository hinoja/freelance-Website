<?php

use App\Http\Controllers\authentification\SocialController;
use App\Http\Controllers\authentification\UserController;
use App\Http\Controllers\authentification\VerifyEmailController;
use App\Http\Controllers\customer\JobController;
use App\Http\Controllers\freelance\ApplyController;
use App\Http\Controllers\freelance\CancelController;
use App\Http\Controllers\freelance\ProfileController;
use App\Http\Controllers\freelance\ResumeController;
use App\Models\Job;
use Brian2694\Toastr\Facades\Toastr;
// use App\Http\Controllers\freelance\ApplyController;
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

// Route::get("/showjob/{$id}",function(){
//     return 'hello';
// })->name('job.show');
Route::get('/showjob/{job:slug}', [JobController::class, 'show'])->name('job.show');
Route::group(['middleware' => 'guest'], function () {
    //login with driver
    Route::get('/auth/redirect/{driver}', [SocialController::class, 'redirect'])->name('SocialRedirect');
    Route::get('/auth/callback/{driver}', [SocialController::class, 'callback'])->name('SocialCallback');
    Route::post('/loginpost', [UserController::class, 'authenticate'])->name('login');
    Route::post('/signup', [UserController::class, 'signup'])->name('signup');
    Route::view('/login', 'authentification.login')->name('login.view');
    Route::view('/signup', 'authentification.signUp')->name('signup.view');
});

//freelance

Route::group(['middleware' => ['auth', 'checkRole:1']], function () {
    Route::post('/profile', [ProfileController::class, 'store'])->name('freelance.profile.post');
    Route::view('/profile', 'freelance.updateProfile')->name('freelance.profile.view');
    Route::get('/apply/{job}', ApplyController::class)->name('job.apply');
    Route::get('/cancel/{job}', CancelController::class)->name('job.cancel');
});
Route::middleware(['auth', 'checkRole:1'])->group(function () {
    Route::view('/addResume', 'freelance.add-resume')->name('resume.index');

    Route::controller(ResumeController::class)->name('resume.')->group(function () {
        Route::get('/manageResume', 'resume')->name('manage');
        Route::post('/addresumepost', 'store')->name('add');
    });
});
//customer
Route::middleware(['auth', 'checkRole:2'])->name('job.')->group(function () {
    Route::view('/addJob', 'customer.add-job')->name('index');
    Route::get('/listApplier/{job:slug}', [ProfileController::class,'index'])->name('applier');
    Route::controller(JobController::class)->group(function () {
        Route::get('/managejob', 'resume')->name('manage');
        Route::post('/addJobpost', 'store')->name('add');
    });
});
Route::get('/', [JobController::class, 'index'])->name('welcome');
Route::get('/moreJob', [JobController::class, 'browsejob'])->name('more.job');

// Route::fallback(function () {
//     Toastr::Info(' sorry,This page don\'t  exist ):', 'Info!!');
// });
