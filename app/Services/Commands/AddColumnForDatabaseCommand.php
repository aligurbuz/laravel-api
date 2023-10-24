<?php

namespace App\Services\Commands;

use App\Constants;
use App\Exceptions\Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
        $modelNamespace = Constants::modelNamespace.'\\'.ucfirst($model);

        if(!class_exists($modelNamespace)){
            Exception::customException('model name is not valid');
        }

        $table = (new $modelNamespace)->getTable();

        $column = $this->ask('Column name');
        $columnType = $this->ask('Column type','string');

        if($columnType==='enum'){
            $columnEnumValues = $this->askWithCompletion('Column enum values',['Separate the values to be taken with commas.']);
        }

        $columnDefault = $this->ask('Column default value','nullable');
        $AfterColumn = $this->ask('After which column should it be added?','id');
        $index = $this->ask('Index to be added?','no');

        if($index==='yes'){
            $indexName = $this->ask('index name','default');
            $indexName = $indexName==='default' ? '' : $indexName;
        }
        else{
            $unique = $this->ask('Unique to be added?','no');

            if($unique==='yes'){
                $uniqueName = $this->ask('unique name','default');
                $uniqueName = $uniqueName==='default' ? '' : $uniqueName;
            }
        }

        $comment = $this->ask('Column Comment','');

        $name = 'addColumnNamed'.ucfirst($column) .ucfirst($table).'Table';

        Artisan::call('make:migration',['name'=> $name,'--table' => $table]);

        $migrationDirectories = File::allFiles(base_path('Database/Migrations'));

        foreach ($migrationDirectories as $directory) {
            $migrationFiles = [];
            $migrationFiles[] = $directory->getFilename();
        }

        $lastMigration = base_path('Database/Migrations').'/'.$migrationFiles[0];
        $lastFilePath = File::get($lastMigration);

        $definition = '$table->'.$columnType.'(\''.$column.'\')';

        if($columnDefault==='nullable'){
            $definition = $definition.'->nullable()';
        }
        else{
            $definition = $definition.'->default(\''.$columnDefault.'\')';
        }

        $definition = $definition.'->after(\''.$AfterColumn.'\')';

        if($index==='yes'){
            $definition = $definition.'->index(\''.$indexName.'\')';
        }

        if($unique==='yes'){
            $definition = $definition.'->unique(\''.$uniqueName.'\')';
        }

        $definition = $definition.'->comment(\''.$comment.'\')';

        $definition = $definition.';';

        $x = str_replace("Schema::table('".$table."', function (Blueprint \$table) {\n","Schema::table('".$table."', function (Blueprint \$table) {
            {$definition} \n",$lastFilePath);

        File::put($lastMigration,$x);

        Artisan::call('update:migration',['model' => $model]);

        return 0;
    }
}
