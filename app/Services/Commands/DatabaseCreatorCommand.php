<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DatabaseCreatorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:database {name}';

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
        if (app()->runningInConsole()) {
            $databases = DB::select('SHOW DATABASES');

            $list = [];

            foreach ($databases as $database) {
                $list[] = $database->Database;
            }

            $name = $this->argument('name');

            if (!in_array($name, $list)) {
                DB::select('CREATE DATABASE ' . $name);
            }
        }
        return 0;
    }
}
