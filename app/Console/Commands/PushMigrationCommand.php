<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PushMigrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'push:migration {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Push migration for model';

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
        dd(11);
        return 0;
    }
}
