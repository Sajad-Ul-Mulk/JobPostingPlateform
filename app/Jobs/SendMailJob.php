<?php

namespace App\Jobs;

use App\Mail\JobPosted;
use App\Models\jobListing;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Queueable, SerializesModels, Dispatchable, InteractsWithQueue;
    public $jobListing;

    /**
     * Create a new job instance.
     */
    public function __construct(public jobListing $j)
    {
        $this->jobListing=$j;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->jobListing->employer->user->email)->send(
            new JobPosted($this->jobListing));
    }
}
