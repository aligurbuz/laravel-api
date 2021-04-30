<?php

namespace App\Console\Commands;

use App\Models\Entities\EntityMap;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpNamespace;

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

        $modelName = ucfirst($this->argument('model'));
        $model = 'App\Models\\'.$modelName;
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

        $databaseColumns = File::getRequire($databaseColumnPath);
        $columns = $databaseColumns['columns'] ?? [];
        $entityNamespace = 'App\Models\Entities';
        $entityPath = app_path('Models').''.DIRECTORY_SEPARATOR.'Entities';
        $entityClassPath = $entityPath.''.DIRECTORY_SEPARATOR.''.$modelName.'.php';

        $namespace = new PhpNamespace($entityNamespace);
        $addClass = $namespace->addClass($modelName);


        $addClass->addProperty('query')->setProtected()->setStatic()->setType('object')
            ->addComment('query data object for entity')
            ->addComment('')
            ->addComment('@var object');

        $method = $addClass->addMethod('__construct');
        $method->addComment(''.$modelName.' constructor');
        $method->addComment('');
        $method->addComment('@param object $query');
        $method->setBody('self::$query = $query;');
        $method->addParameter('query')->setType('object');

        foreach ($columns as $column){

            $addClass->addComment('@property $this '.$column);
            $method = $addClass->addMethod($column);
            $method->addComment('get '.$column.' column for database table');
            $method->addComment('');
            $method->addComment('@return mixed');
            $method->setReturnType('mixed');
            $method->setStatic()->setProtected();
            $method->setBody('return self::$query->'.$column.';');
        }

        $magic = $addClass->addMethod('__get');
        $magic->addParameter('name');
        $magic->setBody('return static::{$name}();');



        if(!file_exists($entityClassPath)){
            touch($entityClassPath);
        }

        $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$namespace.'';
        File::put($entityClassPath,$content);

        $entityMapNamespace = new EntityMap();

        if(!method_exists($entityMapNamespace,lcfirst($modelName))){

            $entityMapFile = $entityPath.''.DIRECTORY_SEPARATOR.'EntityMap.php';

            $getMap = File::get($entityMapFile);

            $getMap = str_replace('//','//

    /**
     * @param object $query
     * @return '.$modelName.'
     */
    public function '.lcfirst($modelName).'(object $query) : '.$modelName.'
    {
        return new '.$modelName.'($query);
    }',$getMap);

            File::put($entityMapFile,$getMap);
        }



        $this->warn('Database column has been created');
        return 0;
    }
}
