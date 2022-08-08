<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    // to resend mail
   public function  resendEmail(Request $request)
   {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }
    //    The Email Verification Notice
   public function verify()
    {
        return view('auth.verify-email');
    }
    // The Email Verification Handler
       public function fullfill(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('/')->with('success',"Your account was verfied to successfully");
    }
}
