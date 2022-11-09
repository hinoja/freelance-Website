<?php

namespace App\Http\Controllers\freelance;

use App\Http\Controllers\Controller;
use App\Jobs\ApplyJob;
use App\Models\Job;
use App\Models\User;
use App\Notifications\apply\ToCustomerNotificationsApply;
use App\Notifications\apply\ToFreelanceNotificationsApply;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

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


        $freelance = Auth::user();
        $customer = $job->customer->user;
        $job->freelances()->toggle($freelance->userable_id);


        // dd(count($job->freelances), $job->freelances);
        if ($job->deadline > now())
            $job->state_id = 4;
        elseif (count($job->freelances) > 0){
            $job->state_id = 1;
            // dd($job->state_id);

        }


        else
            $job->state_id = 3;

        $job->save();

        Notification::send($freelance, new ToFreelanceNotificationsApply($freelance, $customer, $job));
        Notification::send($customer, new ToCustomerNotificationsApply($freelance, $customer, $job));
        Toastr::Info('Your apply is considerated, ckeck your confirmation mail  :)', 'Info!!');
        // (count($job->freelances) > 0) ? $job->state_id = 3 : $job->state_id = 4;

        // ApplyJob::dispatch($freelance ,$Job,$customer);
        return back();
    }
    // public function apply(Request $request,Job $Job)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'name' => ['required'],
    //         'email' => ['required', 'email'],//, 'unique:users,email'
    //         'message' => ['nullable'],
    //         'file' => ['required','max:5120'],
    //     ]);

    //     $name=$request->name;
    //     $message=$request->message;
    //     // $file=$request->file;
    //     $freelance = Auth::user();
    //     $mailCustomer = (User::where('userable_id', '=', $Job->customer_id)->first())->email;
    //     $Job->freelances()->toggle($freelance->userable_id);;
    //     $file=Storage::disk('public')->put("CV_folder",$request->file);

    //     // $freelanceJob1 = freelance_job::where('freelance_id', Auth::user()->userable_id)->where('job_id', $Job->id)->where('is_hired', 1)->get();
    //         Toastr::Info('Your apply is considerated,please verify a confirmation mail in your mailBox  :)', 'Info!!');
    //         ApplyJob::dispatch($freelance,$name,$message, $file ,$Job,$mailCustomer);
    //     return back();
    // }
    /**
     * this function help to retry to a job  that you apply before
     */
    // public function retry(Request $request,Job $Job){
    //     // dd('test');
    //     $freelance = Auth::user();
    //     // $mailCustomer = (User::where('userable_id', '=', $Job->customer_id)->first())->email;
    //     $Job->freelances()->toggle($freelance->userable_id);

    //         Toastr::Info("Your retry is considerated  :)", 'Info!!');
    //         RetryToJob::dispatch($freelance, $Job);
    //         // dd('reussi pour se retracter');

    //     // }
    //     return back();
    // }
}
