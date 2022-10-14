<?php

namespace App\Http\Controllers\authentification;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    // to resend mail
    public function resendEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success', 'Verification link sent!');
    }

    //    The Email Verification Notice
    public function verify()
    {
        // return view('auth.verify-email');
        return redirect('/')->with('primary', ' Please,check your mailbox !! ');
    }

    // The Email Verification Handler
    public function fullfill(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/')->with('success', 'Your account was verfied to successfully');
    }
}
