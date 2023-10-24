<?php

namespace App\Services\Commands;

use App\Constants;
use App\Exceptions\Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RenameColumnForDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rename:column';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Changes the name of a column linked to a model in the database.';

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

        $oldColumn = $this->ask('Old column name');
        $newColumn = $this->ask('New column name');

        $name = 'renameColumnNamed'.ucfirst($oldColumn) .ucfirst($table).'Table';

        Artisan::call('make:migration',['name'=> $name,'--table' => $table]);

        $migrationDirectories = File::allFiles(base_path('Database/Migrations'));

        foreach ($migrationDirectories as $directory) {
            $migrationFiles = [];
            $migrationFiles[] = $directory->getFilename();
        }

        $lastMigration = base_path('Database/Migrations').'/'.$migrationFiles[0];
        $lastFilePath = File::get($lastMigration);

        $definition = '$table->renameColumn(\''.$oldColumn.'\',\''.$newColumn.'\')';

        $definition = $definition.';';

        $x = str_replace("Schema::table('".$table."', function (Blueprint \$table) {\n","Schema::table('".$table."', function (Blueprint \$table) {
            {$definition} \n",$lastFilePath);

        File::put($lastMigration,$x);

        Artisan::call('update:migration',['model' => $model]);

        return 0;
    }
}
