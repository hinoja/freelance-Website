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
        $job->freelances()->detach($freelance->userable_id);
        if ($job->deadline > now()) {
            $job->states()->attach(4);
        } elseif (count($job->freelances) > 0) {
            $job->states()->attach(1);
        } else {
            $job->states()->attach(3);
        }
        $job->save();
        Notification::send($freelance, new ToFreelanceNotificationsApply($freelance, $customer, $job));
        Notification::send($customer, new ToCustomerNotificationsCancel($freelance, $customer, $job));
        Toastr::Info('Your cancel is considerated, ckeck your confirmation mail   :)', 'Info!!');

        return back();
    }
}
