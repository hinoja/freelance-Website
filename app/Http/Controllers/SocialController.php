<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($driver)
    {
         return Socialite::driver($driver)->redirect();

    }
    public function callback($driver)
    {

         // $user = Socialite::driver('google')->user();
          $driverUser = Socialite::driver($driver)->user();
         $user = User::updateOrCreate
         ([
             'driver_id' => $driverUser->id,
             'name' => $driverUser->name,
             'email' => $driverUser->email,
             'driver_token' => $driverUser->token,
             'driver_refresh_token' => $driverUser->refreshToken,
         ]);

         dd($user);
         // $user->token
    }
}
