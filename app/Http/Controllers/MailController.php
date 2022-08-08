<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\TestMarhdownMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

        public function send()
        {
              $user=['email'=>'njimijanohi@gmail.com','name'=>'Monsieur Test'];
              Mail::to('hinoja2@gmail.com')->send(new TestMarhdownMail());
              return view('emails.TestSendEmail');
            // echo "testng";
        }
}
