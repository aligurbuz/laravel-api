<?php

namespace App\Jobs;

use App\Factory\Factory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Socket implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var string
     */
    protected string $channel;

    /**
     * @var mixed
     */
    protected mixed $hash;

    /**
     * @var array
     */
    protected array $data = [];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $channel, mixed $hash, array $data = [])
    {
        $this->channel = $channel;
        $this->hash = $hash;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $channel = $this->channel;

        Factory::socket()->$channel(
            array_merge(
                $this->data,
                ['routeParameters' => $this->hash]
            )
        );
    }
}
