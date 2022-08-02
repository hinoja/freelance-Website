<?php

namespace App\Http\Controllers;

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
        $user = Socialite::driver('google')->user();

        dd($user);
        // $user->token
   }
}
