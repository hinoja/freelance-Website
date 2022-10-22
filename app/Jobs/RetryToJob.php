<?php

namespace App\Jobs;

use App\Models\Job;
use App\Models\User;
use Illuminate\Bus\Queueable;
use App\Mail\mailToFreelanceRetry;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class RetryToJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $freelance,$jobInfo;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $freelance,Job $jobInfo)
    {
           $this->freelance=$freelance;
           $this->jobInfo=$jobInfo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(2);
        Mail::to($this->freelance->email)->queue(new mailToFreelanceRetry($this->freelance,$this->jobInfo));
    }
}
