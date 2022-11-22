<?php

namespace App\Http\Controllers\freelance;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Notifications\apply\ToCustomerNotificationsApply;
use App\Notifications\apply\ToFreelanceNotificationsApply;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ApplyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Job $job)
    {
        if(empty($job->end_at)){
            $freelance = Auth::user();
            $customer = $job->customer->user;
            $job->freelances()->attach($freelance->userable_id);
            if ($job->deadline > now()) {
            // if (!empty($job->end_at)) {
                // $job->state_id = 4;
                $job->states()->attach(4);//Expirated  pas le lieu
            } elseif (count($job->freelances) > 0) {
                $job->states()->attach(1);//In Progress
                // $job->state_id = 1;
            } else {
                $job->state_id = 3;
                $job->states()->attach(3);//Created
            }
            $job->save();
            Notification::send($freelance, new ToFreelanceNotificationsApply($freelance, $customer, $job));
            Notification::send($customer, new ToCustomerNotificationsApply($freelance, $customer, $job));
            Toastr::Info('Your apply is considerated, ckeck your confirmation mail  :)', 'Info!!');

        }else{
            Toastr::Warning('This Job s already Finish :)', 'Error!!');
        }

        return back();
    }
}
