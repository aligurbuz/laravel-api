<?php

namespace App\Repositories;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Laravel\SerializableClosure\Exceptions\PhpVersionNotSupportedException;
use Laravel\SerializableClosure\SerializableClosure;

class BaseQueueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var SerializableClosure
     */
    protected SerializableClosure $callback;

    /**
     * Create a new job instance.
     *
     */
    public function __construct(SerializableClosure $callback)
    {
       $this->callback = $callback;
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws PhpVersionNotSupportedException
     */
    public function handle(): void
    {
        call_user_func($this->callback);
    }
}
