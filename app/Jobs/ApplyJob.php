<?php

namespace App\Jobs;

use App\Models\Job;
use App\Models\User;
use App\Mail\mailToCustomer;
use App\Mail\mailToFreelance;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
// use Illuminate\Contracts\Queue\ShouldBeUnique;

class ApplyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $freelance,$name,$message,$jobInfo,$file,$emailCustomer;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public function __construct(User $freelance,String $name,string  $message,Job $jobInfo,String $emailCustomer)
    public function __construct(User $freelance,$name, $message,$file,Job $jobInfo,$emailCustomer)
    {
        $this->freelance=$freelance;
        $this->name=$name;
        $this->emailCustomer=$emailCustomer;
        $this->file=$file;
        $this->message=$message;
        $this->jobInfo=$jobInfo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(3);
        // $customer=;
        Mail::to($this->freelance->email)->queue(new mailToFreelance($this->freelance,$this->jobInfo));
        // Mail::to($this->emailCustomer)->queue(new mailToCustomer($this->name,$this->message,$this->jobInfo));->delay(now()->addMinutes(3));
        Mail::to($this->emailCustomer)->queue(new mailToCustomer($this->name,$this->message,$this->file,$this->jobInfo));
    }
}
