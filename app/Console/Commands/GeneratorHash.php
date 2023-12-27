<?php

namespace App\Console\Commands;

use App\Libs\HashGenerator;
use Illuminate\Console\Command;
use phpseclib3\Crypt\Hash;

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
     * @return int
     */
    public function handle()
    {
        $this->output->success((new HashGenerator())->encode(time()));
    }
}
