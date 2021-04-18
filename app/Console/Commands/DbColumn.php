<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DbColumn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:column {model}';

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

        $model = 'App\Models\\'.ucfirst($this->argument('model'));
        $table = (new $model)->getTable();
        $databaseColumnPath = base_path('database'.DIRECTORY_SEPARATOR.'columns'.DIRECTORY_SEPARATOR.''.$table.'.php');
        $sqlString = 'SELECT column_name FROM information_schema.columns WHERE table_name = \''.$table.'\'';
        $columns = DB::select($sqlString);
        $list = [];

        foreach ($columns as $column){
            $list[] = '"'.$column->COLUMN_NAME.'"';
        }

        File::put($databaseColumnPath,'<?php return ['.implode(',',$list).'];');
        $this->warn('Database column has been created');
        return 0;
    }
}
