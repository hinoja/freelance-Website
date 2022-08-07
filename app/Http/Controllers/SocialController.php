<?php

namespace App\Http\Controllers;

use Exception;
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

        //   $user = User::updateOrCreate
        //  ([
        //      'driver_id' => $driverUser->id,
        //      'name' => $driverUser->name,
        //      'email' => $driverUser->email,
        //      'driver_token' => $driverUser->token,
        //      'driver_refresh_token' => $driverUser->refreshToken,
        //  ]);

      try{
            $provider_user = Socialite::driver($driver)->user();
                dd($provider_user);
            $user = User::findOrCreate(
                [ 'username' => $$provider_user->getNickname() ],
                [ 'email' => $$provider_user->getEmail()  ],
                [ 'provider_id' => $$provider_user->getId(),  ]
            );
         }

        catch(Exception $e)
         {
            dd('error');
            return redirect('/login');
          }



         dd($user);
         // $user->token
    }
}
