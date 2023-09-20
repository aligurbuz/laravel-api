<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class AddColumnForDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:column';

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
        $model = $this->ask('Model name');
        $column = $this->ask('Column name');
        $columnType = $this->ask('Column type','string');

        if($columnType==='enum'){
            $columnEnumValues = $this->askWithCompletion('Column enum values',['Separate the values to be taken with commas.']);
        }

        $columnDefault = $this->ask('Column default value','nullable');
        $AfterColumn = $this->ask('After which column should it be added?');
        $comment = $this->ask('Column Comment');

        return 0;
    }
}
