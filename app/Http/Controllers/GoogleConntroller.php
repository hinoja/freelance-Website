<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleConntroller extends Controller
{
   public function redirectgoogle()
   {
        return Socialite::driver('google')->redirect();

   }
   public function callbackgoogle()
   {
    dd('test');
        // $user = Socialite::driver('google')->user();
         $githubUser = Socialite::driver('github')->user();
        $user = User::updateOrCreate([
            'github_id' => $githubUser->id,
        ], [
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'github_token' => $githubUser->token,
            'github_refresh_token' => $githubUser->refreshToken,
        ]);

        dd($user);
        // $user->token
   }
}
