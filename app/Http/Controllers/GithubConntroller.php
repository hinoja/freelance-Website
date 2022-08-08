<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubConntroller extends Controller
{
    public function redirectgit()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callbackgit()
    {
        $user = Socialite::driver('github')->user();
        //   Verifier que l'utilisateur existe
        // $githubUser = Socialite::driver('github')->user();
        // $user = User::updateOrCreate([
        //     'github_id' => $githubUser->id,
        // ], [
        //     'name' => $githubUser->name,
        //     'email' => $githubUser->email,
        //     'github_token' => $githubUser->token,
        //     'github_refresh_token' => $githubUser->refreshToken,
        // ]);

        // Auth::login($user);
        dd('tres bon');

        return redirect('/dashboard');
        // $user->token
    }
}
