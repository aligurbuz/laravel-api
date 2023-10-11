<?php

namespace App\Console\Commands\Tests;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CreateResource extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:test {file}';

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
        Artisan::call('make:command',['name' => 'Tests\Resources\\'.ucfirst($this->argument('file'))]);

        return Command::SUCCESS;
    }
}
