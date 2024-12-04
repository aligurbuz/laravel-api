<?php

namespace App\Console\Commands;

use App\Libs\HashGenerator;
use Illuminate\Console\Command;

class GeneratorHash extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:hash';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $hash = new HashGenerator();
        $time = (string)time();

        $this->output->success($hash->encode($time));
    }
}
