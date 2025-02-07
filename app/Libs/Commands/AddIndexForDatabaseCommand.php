<?php

namespace App\Libs\Commands;

use App\Constants;
use App\Exceptions\Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class AddIndexForDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:index';

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
        $modelNamespace = Constants::modelNamespace . '\\' . ucfirst($model);

        if (!class_exists($modelNamespace)) {
            Exception::customException('model name is not valid');
        }

        $table = (new $modelNamespace)->getTable();

        $column = $this->ask('Index Column name (use commas for multiple indexes)');
        $indexName = $this->ask('Index name');

        $columns = explode(',', $column);

        $arrayFormatter = '\'' . implode('\',\'', $columns) . '\'';

        $name = 'add_index_to_columns_' . implode('_', $columns) . '_for_' . $table . '_table';

        Artisan::call('make:migration', ['name' => $name, '--table' => $table]);

        $migrationDirectories = File::allFiles(base_path('Database/Migrations'));

        foreach ($migrationDirectories as $directory) {
            $migrationFiles = [];
            $migrationFiles[] = $directory->getFilename();
        }

        $addedFile = $migrationFiles[0];

        $lastMigration = base_path('Database/Migrations') . '/' . $addedFile;
        $lastFilePath = File::get($lastMigration);

        if (is_null($indexName)) {
            $definition = '$table->index([' . $arrayFormatter . ']);';
        } else {
            $definition = '$table->index([' . $arrayFormatter . '], \'' . $indexName . '\');';
        }

        $x = str_replace("Schema::table('" . $table . "', function (Blueprint \$table) {\n", "Schema::table('" . $table . "', function (Blueprint \$table) {
            {$definition} \n", $lastFilePath);

        File::put($lastMigration, $x);

        Artisan::call('migrate');
        Artisan::call('update:column', ['model' => $model]);

        return 0;
    }
}
