<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatabaseCreatorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:database';

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
        if($this->app->runningInConsole() && !File::exists('checkDb')){
            $databases = DB::select('SHOW DATABASES');

            $list = [];

            foreach ($databases as $database){
                $list[] = $database->Database;
            }

            $appDatabase = config('database.connections.'.config('database.default').'.database');

            if(!in_array($appDatabase,$list)){
                DB::select('CREATE DATABASE '.$appDatabase);
                File::put('checkDb','');
            }
        }
        return 0;
    }
}
