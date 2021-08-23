<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class AppNameCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'name {name}pph';

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
        $change = str_replace('APP_NAME=Laravel','APP_NAME='.$name.'',$envFile);
        $change = str_replace('DB_DATABASE=api','DB_DATABASE='.$name.'',$change);

        File::put('.env',$change);

        $this->warn('environment has been changed');
        return 0;
    }
}
