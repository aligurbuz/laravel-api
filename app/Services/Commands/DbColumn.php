<?php

namespace App\Services\Commands;

use App\Models\Entities\EntityMap;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpNamespace;
use App\Services\Db as DatabaseService;

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
        $config = DatabaseService::config();
        $configDatabaseName = $config['database'];

        $modelName = ucfirst($this->argument('model'));
        $model = 'App\Models\\'.$modelName;
        $table = (new $model)->getTable();
        $databaseColumnPath = base_path('database'.DIRECTORY_SEPARATOR.'columns'.DIRECTORY_SEPARATOR.''.$table.'.php');
        $sqlString = 'SELECT * FROM information_schema.columns WHERE table_schema = \''.$configDatabaseName.'\' && table_name = \''.$table.'\'';
        $sqlIndexString = 'SHOW KEYS FROM '.$table;
        $indexes = DB::select($sqlIndexString);
        $columns = DB::select($sqlString);

        $list['required_columns'] = [];
        $list['max_length_columns'] = [];
        $list['max_length_values'] = [];
        $list['indexes'] = [];
        $list['boolean_values'] = [];
        $list['default_keys'] = [];
        $list['default_values'] = [];
        $list['enum_columns'] = [];
        $list['enum_values'] = [];

        foreach ($indexes as $index){
            $list['indexes'][] = '"'.$index->Column_name.'"';
        }

        $addings = ['CURRENT_CONNECTIONS','TOTAL_CONNECTIONS','USER'];

        foreach ($columns as $column){

            $enum = null;

            if($column->DATA_TYPE=='enum'){
                $enum = $column->COLUMN_TYPE;
                $enum = str_replace('enum(','',$enum);
                $enum = str_replace(')','',$enum);
                $enum = str_replace('\'','',$enum);
            }

            $list['comments'][] = '"'.$column->COLUMN_COMMENT.'"';

            if(!is_null($enum)){
                $list['enum_columns'][] = '"'.$column->COLUMN_NAME.'"';
                $list['enum_values'][] = '"'.$enum.'"';
            }


            if($column->COLUMN_TYPE=='tinyint(1)'){
                $list['boolean_values'][] = '"'.$column->COLUMN_NAME.'"';
            }

            if(!is_null($column->COLUMN_DEFAULT)){
                $list['default_keys'][] = '"'.$column->COLUMN_NAME.'"';
                $list['default_values'][] = '"'.$column->COLUMN_DEFAULT.'"';
            }

            if(!in_array($column->COLUMN_NAME,$addings,true)){
                $addings[] = $column->COLUMN_NAME;
                $list['columns'][] = '"'.$column->COLUMN_NAME.'"';
                if(!is_null($column->CHARACTER_MAXIMUM_LENGTH)){
                    $list['max_length_columns'][] = '"'.$column->COLUMN_NAME.'"';
                    $list['max_length_values'][] = '"'.$column->CHARACTER_MAXIMUM_LENGTH.'"';
                }

                if(is_null($column->COLUMN_DEFAULT) && $column->IS_NULLABLE == 'NO' && $column->COLUMN_NAME!=='id'){
                    $list['required_columns'][] = '"'.$column->COLUMN_NAME.'"';
                }

                if(Str::endsWith($column->DATA_TYPE,'int')){
                    $list['types'][] = '"integer"';
                }
                elseif(Str::endsWith($column->DATA_TYPE,'json')){
                    $list['types'][] = '"array"';
                }
                elseif(Str::endsWith($column->DATA_TYPE,'char') || Str::endsWith($column->DATA_TYPE,'text')){
                    if($column->COLUMN_NAME=='image' OR Str::endsWith($column->COLUMN_NAME,'_image')){
                        $list['types'][] = '"image"';
                    }
                    elseif($column->COLUMN_NAME=='file' OR Str::endsWith($column->COLUMN_NAME,'_file')){
                        $list['types'][] = '"image"';
                    }
                    else{
                        $list['types'][] = '"string"';
                    }
                }
                else{
                    $list['types'][] = '"'.$column->DATA_TYPE.'"';
                }
            }


        }

        if(!file_exists($databaseColumnPath)){
            touch($databaseColumnPath);
        }

        File::put($databaseColumnPath,'<?php return [
        \'comments\' => ['.implode(',',$list['comments']).'],
        \'columns\' => ['.implode(',',$list['columns']).'],
        \'indexes\' => ['.implode(',',$list['indexes']).'],
        \'types\' => ['.implode(',',$list['types']).'],
        \'required_columns\' => ['.implode(',',$list['required_columns']).'],
        \'max_length_columns\' => ['.implode(',',$list['max_length_columns']).'],
        \'max_length_values\' => ['.implode(',',$list['max_length_values']).'],
        \'boolean_values\' => ['.implode(',',$list['boolean_values']).'],
        \'default_keys\' => ['.implode(',',$list['default_keys']).'],
        \'default_values\' => ['.implode(',',$list['default_values']).'],
        \'enum_columns\' => ['.implode(',',$list['enum_columns']).'],
        \'enum_values\' => ['.implode(',',$list['enum_values']).'],
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

            $getMap = str_replace('class EntityMap
{','class EntityMap
{
    /**
     * @param object $query
     * @return '.$modelName.'
     */
    public function '.lcfirst($modelName).'(object $query) : '.$modelName.'
    {
        return new '.$modelName.'($query);
    }
    ',$getMap);

            File::put($entityMapFile,$getMap);
        }



        $this->warn('Database column has been created');
        return 0;
    }
}
