<?php

namespace App\Jobs;

use App\Models\Job;
use App\Models\User;
use App\Mail\mailToCustomer;
use App\Mail\mailToFreelance;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ApplyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $freelance,$customer,$jobInfo;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $freelance,User $customer,Job $jobInfo)
    {

        $this->freelance=$freelance;
        $this->customer=$customer;
        $this->jobInfo=$jobInfo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(0);
        Mail::to($this->freelance->email)->queue(new mailToFreelance($this->freelance,$this->jobInfo))->delay(now()->addMinutes(3));
        Mail::to($this->customer->email)->queue(new mailToCustomer($this->freelance,$this->jobInfo))->delay(now()->addMinutes(3));;
    }
}
