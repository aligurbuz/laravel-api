<?php

namespace App\Libs\Commands;

use App\Constants;
use App\Exceptions\Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class DropIndexForDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'drop:index';

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

        $indexName = $this->ask('Index name');

        $name = 'drop_index_to_columns_' . $indexName . '_for_' . $table . '_table';

        Artisan::call('make:migration', ['name' => $name, '--table' => $table]);

        $migrationDirectories = File::allFiles(base_path('Database/Migrations'));

        foreach ($migrationDirectories as $directory) {
            $migrationFiles = [];
            $migrationFiles[] = $directory->getFilename();
        }

        $addedFile = $migrationFiles[0];

        $lastMigration = base_path('Database/Migrations') . '/' . $addedFile;
        $lastFilePath = File::get($lastMigration);

        $definition = '$table->dropIndex(\'' . $indexName . '\');';

        $x = str_replace("Schema::table('" . $table . "', function (Blueprint \$table) {\n", "Schema::table('" . $table . "', function (Blueprint \$table) {
            {$definition} \n", $lastFilePath);

        File::put($lastMigration, $x);

        dd(11);

        Artisan::call('migrate');
        Artisan::call('update:column', ['model' => $model]);

        return 0;
    }
}
