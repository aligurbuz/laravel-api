<?php

namespace App\Jobs;

use App\Factory\Factory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SmsSender implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var string|null
     */
    protected ?string $to = null;

    /**
     * @var string|null
     */
    protected ?string $message = null;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $to, string $message)
    {
        $this->to = $to;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Factory::sms()->to($this->to)->message($this->message)->send();
    }
}
