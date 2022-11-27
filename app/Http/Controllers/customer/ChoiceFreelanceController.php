<?php

namespace App\Http\Controllers\customer;

use App\Models\Job;
use App\Models\User;
use App\Models\Freelance;
use App\Models\freelance_jobs;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EngagedChoice\EngagedCustomerNotification;
use App\Notifications\EngagedChoice\EngagedFreelanceNotification;
use App\Notifications\DisEngagedChoice\DisEngagedCustomerNotification;
use App\Notifications\DisEngagedChoice\DisEngagedFreelanceNotification;

class ChoiceFreelanceController extends Controller
{
    /**
     *assign the job to a specific freelance
     */
    public function selected(Job $job, Freelance $freelance)
    {
        if (freelance_jobs::where('job_id', $job->id)->where('is_hired', 1)->first()) {
            Toastr::Warning(' Freelance is already  Selected like solution  to (' . $job->title . ')   :)', 'Error!!');
        } elseif (!empty($job->end_at)) {
            Toastr::Warning('This job : (' . $job->title . ')  is already finish  :)', 'Error!!');
        } else {
            $freelance_job = freelance_jobs::where('job_id', $job->id)->where('freelance_id', $freelance->id)->first();
            $freelance_job->is_hired = 1; //activate
            $freelance_job->save();
            $job->start_at = now();
            $freelanceUser = User::where('userable_id', $freelance->id)->first();
            $customer = $job->customer->user;
            $job->save();
            $job->states()->attach(1); //progress state
            Toastr::success('This Freelance is Selected like solution to  (' . $job->title . ')   :)', 'Success!!');
            Notification::send($customer, new EngagedCustomerNotification($freelanceUser, $customer, $job));
            Notification::send($freelanceUser, new EngagedFreelanceNotification($freelanceUser, $customer, $job));
        }
        return back();
    }

    /**
     *
     */
    public function CancelChoice(Job $job, Freelance $freelance)
    {
        $customer = $job->customer->user;
        $freelanceUser = $freelance->user;
        $freelance_job = freelance_jobs::where('job_id', $job->id)->where('freelance_id', $freelance->id)->first();
        $freelance_job->is_hired = 0; //activate
        $freelance_job->save();
        $job->start_at = null;
        $job->save();
        $job->states()->attach(1); //In progress
        Notification::send($customer, new DisEngagedCustomerNotification($freelanceUser, $customer, $job));
        Notification::send($freelanceUser, new DisEngagedFreelanceNotification($freelanceUser, $customer, $job));
        Toastr::success('Cancel choice  of freelance Selected   (' . $job->title . ')   :)', 'Success!!');
        //notifications systems
        return back();
    }
}
