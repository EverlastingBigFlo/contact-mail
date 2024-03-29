<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MailSender implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
        public $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('anjorin199@gmail.com')->send(new SendMail($this->data));
    }
}
