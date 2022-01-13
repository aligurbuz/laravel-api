<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class EnvironmentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'environment {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $envFile = File::get('.env');
        $name = $this->argument('name');

        $change = str_replace('APP_ENV=local','APP_ENV='.$name.'',$envFile);
        $change = str_replace('REPOSITORY_CACHE = false','REPOSITORY_CACHE=true',$change);

        File::put('.env',$change);

        $this->warn('environment has been changed');
        return 0;
    }
}
