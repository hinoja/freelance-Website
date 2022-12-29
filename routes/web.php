<?php

use App\Http\Controllers\admin\adminController;
use App\Models\Job;
use GuzzleHttp\Middleware;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\customer\JobController;
use App\Http\Controllers\freelance\ApplyController;
use App\Http\Controllers\freelance\CancelController;
use App\Http\Controllers\freelance\ResumeController;
use App\Http\Controllers\freelance\ProfileController;
// use App\Http\Controllers\freelance\ApplyController;
use App\Http\Controllers\authentification\UserController;
use App\Http\Controllers\authentification\SocialController;
use App\Http\Controllers\authentification\VerifyEmailController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\customer\ChoiceFreelanceController;
use App\Http\Livewire\Admin\ListUser;

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
    Route::get('/signup', [UserController::class,'indexRegister'])->name('signup.view');
});

//freelance
Route::get('/profile/{user:name}', [ProfileController::class, 'show'])->name('freelance.profileCV.view');
Route::view('/profile', 'freelance.updateProfile')->name('freelance.profile.view');
Route::group(['middleware' => ['auth', 'checkRole:1']], function () {
    Route::post('/profile', [ProfileController::class, 'store'])->name('freelance.profile.post');
    Route::get('/apply/{job:slug}', ApplyController::class)->name('job.apply');
    Route::get('/cancel/{job:slug}', CancelController::class)->name('job.cancel');
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
    Route::get('/choice/{job:slug}/{freelance}', [ChoiceFreelanceController::class, 'selected'])->name('selected.freelance');
    Route::get('/cancel/{job:slug}/{freelance}', [ChoiceFreelanceController::class, 'CancelChoice'])->name('cancel.freelance');
    Route::view('/addJob', 'customer.add-job')->name('index');
    Route::get('/listAppliers/{job:slug}', [ProfileController::class, 'index'])->name('applier');
    Route::controller(JobController::class)->group(function () {
        Route::get('/managejob', 'resume')->name('manage');
        Route::post('/addJobpost', 'store')->name('add');
        Route::get('/managejob/finish/{job:slug}', 'finish')->name('finish');
        Route::delete('/delete/{job:slug}', 'delete')->name('delete'); //delete method
        // Route::get('/managejob/cancel/{job:slug}', 'cancel')->name('customer.cancel');
        Route::get('/managejob/launch/{job:slug}', 'launch')->name('customer.launch');
    });
});
Route::get('/', [JobController::class, 'index'])->name('welcome');
Route::get('/moreJob', [JobController::class, 'browsejob'])->name('more.job');



Route::get('/download/appliers{job:slug}', [PDFController::class, 'download'])->name('download.pdf');
// Route::fallback(function () {
//     Toastr::Info(' sorry,This page don\'t  exist ):', 'Info!!');
// });


//Chat
Route::resource('/chat',ChatController::class);

Route::get('/admin/index',[adminController::class,'home'])->name('admin.home');
Route::view('/admin/jobs','dashboard.views.jobs')->name('admin.job');
Route::view('/admin/users','dashboard.views.userTable')->name('admin.user');
// Route::get('/route',function(){
//   view('dashboard.welcome');
// });
// Route::livewire('/admin/users',ListUser::class);
