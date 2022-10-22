<?php

namespace App\Http\Controllers\freelance;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Http\Request;
use App\Jobs\ApplyJob;
use App\Jobs\RetryToJob;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\freelance_job;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class applyJobController extends Controller
{


    /**
     * THis function help pply to a job by freelanceUser
     */
    public function apply(Request $request,Job $Job)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],//, 'unique:users,email'
            'message' => ['nullable'],
            'file' => ['required','max:5120'],
        ]);

        $name=$request->name;
        $message=$request->message;
        // $file=$request->file;
        $freelance = Auth::user();
        $mailCustomer = (User::where('userable_id', '=', $Job->customer_id)->first())->email;
        $Job->freelances()->toggle($freelance->userable_id);;
        $file=Storage::disk('public')->put("CV_folder",$request->file);

        // $freelanceJob1 = freelance_job::where('freelance_id', Auth::user()->userable_id)->where('job_id', $Job->id)->where('is_hired', 1)->get();
            Toastr::Info('Your apply is considerated,please verify a confirmation mail in your mailBox  :)', 'Info!!');
            ApplyJob::dispatch($freelance,$name,$message, $file ,$Job,$mailCustomer);
        return back();
    }
    /**
     * this function help to retry to a job  that you apply before
     */
    public function retry(Request $request,Job $Job){
        // dd('test');
        $freelance = Auth::user();
        // $mailCustomer = (User::where('userable_id', '=', $Job->customer_id)->first())->email;
        $Job->freelances()->toggle($freelance->userable_id);

            Toastr::Info("Your retry is considerated  :)", 'Info!!');
            RetryToJob::dispatch($freelance, $Job);
            // dd('reussi pour se retracter');

        // }
        return back();
    }
}
