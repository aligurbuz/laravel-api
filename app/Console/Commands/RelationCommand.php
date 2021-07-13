<?php

namespace App\Console\Commands;

use App\Constants;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

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
        $reverseList = [];

        $databaseColumns = base_path('database').''.DIRECTORY_SEPARATOR.'columns';
        $relationsMapFile = $databaseColumns.''.DIRECTORY_SEPARATOR.'relations.json';

        foreach ($modelFiles as $modelFile){
            $modelName = str_replace('.php','',$modelFile->getFilename());
            $namespace = $modelNamespace.'\\'.$modelName;
            $queries =  (new $namespace)->getWithQueries();

            if(is_array($queries)){
                foreach ($queries as $query){
                    if(isset($query['repository'])){
                        $list[$modelName][] = ucfirst($query['repository']);
                        if(
                            !isset($list[ucfirst($query['repository'])])
                            || !in_array($modelName,$list[ucfirst($query['repository'])])
                        ){
                            $list[ucfirst($query['repository'])][] = $modelName;
                        }


                        if(isset($list[ucfirst($query['repository'])]) && !in_array($modelName,$list[ucfirst($query['repository'])])){
                            $list[ucfirst($query['repository'])][] = $modelName;
                        }

                    }
                }
            }
        }

        File::put($relationsMapFile,Collection::make($list)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        $this->warn('relation map has been updated');

        return 0;
    }
}
