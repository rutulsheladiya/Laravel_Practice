<?php

namespace App\Jobs;

use App\Mail\Welcome;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Models\Personal;
use Exception;

class sendmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    // public $tries=3;

    // public function retryUntil()
    // {
    //     return now()->addSeconds(15);
    // }
    /**
     * Create a new job instance.
     */
    public function __construct(public Personal $personal)
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // throw new Exception;
        Mail::to($this->personal->email)->send(new Welcome($this->personal));
        // $this->release(now()->addSeconds(20));
    }
}
