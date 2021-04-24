<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
        $sqlString = 'SELECT * FROM information_schema.columns WHERE table_name = \''.$table.'\'';
        $columns = DB::select($sqlString);

        $list = [];

        foreach ($columns as $column){
            $list['columns'][] = '"'.$column->COLUMN_NAME.'"';

            if(Str::endsWith($column->DATA_TYPE,'int')){
                $list['types'][] = '"integer"';
            }
            elseif(Str::endsWith($column->DATA_TYPE,'char') || Str::endsWith($column->DATA_TYPE,'text')){
                $list['types'][] = '"string"';
            }
            else{
                $list['types'][] = '"'.$column->DATA_TYPE.'"';
            }

        }

        if(!file_exists($databaseColumnPath)){
            touch($databaseColumnPath);
        }
        File::put($databaseColumnPath,'<?php return [
        \'columns\' => ['.implode(',',$list['columns']).'],
        \'types\' => ['.implode(',',$list['types']).'],
        ];');
        $this->warn('Database column has been created');
        return 0;
    }
}
