<?php

namespace App\Services\Commands;

use App\Constants;
use App\Services\Db;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RelationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:relation';

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
        $modelDir = app_path('Models');

        $modelNamespace = Constants::modelNamespace;
        $modelFiles = File::files($modelDir);

        $list = [];
        $codes = [];

        $databaseColumns = base_path('database').''.DIRECTORY_SEPARATOR.'columns';
        $relationsMapFile = $databaseColumns.''.DIRECTORY_SEPARATOR.'relations.json';
        $relationsCodeFile = $databaseColumns.''.DIRECTORY_SEPARATOR.'relationCodes.json';
        $configGlobalRepository = config('repository.globalScopes');

        foreach ($modelFiles as $modelFile){
            $modelName = str_replace('.php','',$modelFile->getFilename());
            $namespace = $modelNamespace.'\\'.$modelName;
            $namespaceInstance = (new $namespace);
            $table = $namespaceInstance->getTable();
            $entityColumns = Db::columns($table);
            $tableCode = Str::camel(getTableCode($modelName));

            foreach ($entityColumns as $entityColumn){
                if(Str::endsWith($entityColumn,'_code')){
                    if(!isset($codes[$entityColumn]) OR !in_array($tableCode,$configGlobalRepository)){
                        $codes[$entityColumn][] = $modelName;
                    }
                }
            }

            $queries =  $namespaceInstance->getWithQueries();

            if(is_array($queries)){
                foreach ($queries as $query){
                    if(isset($query['repository'])){
                        if(!in_array(ucfirst($query['repository']),($list[$modelName] ?? []))){
                            $list[$modelName][] = ucfirst($query['repository']);
                        }

                        if(
                            !isset($list[ucfirst($query['repository'])])
                            || !in_array($modelName,$list[ucfirst($query['repository'])])
                        ){
                            if(!in_array($modelName,($list[ucfirst($query['repository'])] ?? []))){
                                $list[ucfirst($query['repository'])][] = $modelName;
                            }
                        }


                        if(isset($list[ucfirst($query['repository'])]) && !in_array($modelName,$list[ucfirst($query['repository'])])){
                            $list[ucfirst($query['repository'])][] = $modelName;
                        }

                    }
                }
            }
        }

        File::put($relationsMapFile,Collection::make($list)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        File::put($relationsCodeFile,Collection::make($codes)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        $this->warn('relation map has been updated');

        return 0;
    }
}
