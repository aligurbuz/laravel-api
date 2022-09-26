<?php

namespace App\Console\Commands;

use App\Http\Controllers\DoodleController;
use Illuminate\Console\Command;

class Doodle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doodle {method}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'free working';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $method = $this->argument('method');

        return (new DoodleController())->$method();
    }
}
