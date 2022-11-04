<?php

namespace App\Http\Controllers\freelance;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Notifications\apply\ToFreelanceNotificationsApply;
use App\Notifications\cancel\ToCustomerNotificationsCancel;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class CancelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Job $job)
    {
        $freelance = Auth::user();
        $customer = $job->customer->user;
        $job->freelances()->toggle($freelance->userable_id);
        Notification::send($freelance, new ToFreelanceNotificationsApply($freelance,$customer, $job));
        Notification::send($customer, new ToCustomerNotificationsCancel($freelance,$customer, $job));
        Toastr::Info('Your cancel is considerated, ckeck your confirmation mail   :)', 'Info!!');

        return back();
    }
}
