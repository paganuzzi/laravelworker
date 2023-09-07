<?php

namespace App\Jobs;

use App\Mail\OrderShipped;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $randomNumber = rand(30, 90);
        $time = Carbon::now()->calendar();
        sleep($randomNumber);
        Mail::to('paganuzzi@gmail.com')->queue(new OrderShipped($time, $randomNumber));
    }
}
