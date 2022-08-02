<?php

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
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();



})->name("login.github");

Route::get('/auth/callback', function () {
    // $user = Socialite::driver('github')->user();
    $githubUser = Socialite::driver('github')->user();
    $user = User::updateOrCreate([
        'github_id' => $githubUser->id,
    ], [
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);

    Auth::login($user);
   dd('tres bon');
    return redirect('/dashboard');
    // $user->token
});

//login with google
Route::get('/auth/redirect/google', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');

Route::get('/auth/callback/google', function () {
    $user = Socialite::driver('google')->user();

    dd($user);
    // $user->token
});

// //login with facebook
// Route::get('/auth/redirect', function () {
//     return Socialite::driver('facebook')->redirect();
// })->name("login.facebook");

// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('facebook')->user();

//     // $user->token
// });


