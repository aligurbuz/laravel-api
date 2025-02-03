<?php

namespace App\Console\Commands;

use App\Libs\Redis;
use Illuminate\Console\Command;

class ClearCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Redis client flush all';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Redis::client()->flushall();

        $this->output->success('redis client flush all');
    }
}
