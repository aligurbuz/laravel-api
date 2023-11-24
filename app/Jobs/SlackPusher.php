<?php

namespace App\Jobs;

use App\Libs\Slack;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SlackPusher implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * get channel name for slack
     *
     * @var string
     */
    protected string $channel;

    /**
     * get the pushed message for slack
     *
     * @var string
     */
    protected string $message;

    /**
     * Create a new job instance.
     *
     * @param $channel
     * @param $message
     */
    public function __construct($channel, $message)
    {
        $this->channel = $channel;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        Slack::channel($this->channel)->push($this->message);
    }
}
