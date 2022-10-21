<?php

namespace App\Http\Controllers\freelance;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Http\Request;
use App\Jobs\ApplyJob;
use App\Jobs\SendApplyJob;
use App\Mail\JobIsApplied;
use App\Mail\mailToApplyJob;
use App\Http\Controllers\Controller;
use App\Jobs\RetryToJob;
use App\Models\freelance_job;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class applyJobController extends Controller
{


    /**
     * THis function help to apply on a job of list
     */
    public function apply(Job $Job)
    {
        $freelance = Auth::user();
        $customer = User::where('userable_id', '=', $Job->customer_id)->get();
        $Job->freelances()->toggle($freelance->userable_id);
          // $Job->freelances()->attach(Auth::user()->userable_id);

        $freelanceJob1 = freelance_job::where('freelance_id', Auth::user()->userable_id)->where('job_id', $Job->id)->where('is_hired', 1)->get();
        // $freelanceJob1 = freelance_jobs::where([
        //     ['freelance_id', Auth::user()->userable_id],
        //     ['job_id',$Job->id],
        //     ['is_hired',1]
        // ])->first();

        if (count($freelanceJob1) > 0) {
            Toastr::Info('Your apply is considerated,please verify a confirmation mail in your mailBox  :)', 'Info!!');
            ApplyJob::dispatch($freelance, $customer, $Job);
        } else {
            Toastr::Info("Your retry is considerated  :)", 'Info!!');
            RetryToJob::dispatch($freelance, $Job);
        }
        return back();


    }
}
