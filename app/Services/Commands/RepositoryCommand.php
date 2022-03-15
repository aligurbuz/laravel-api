<?php

namespace App\Services\Commands;

use App\Services\Db;
use App\Repositories\Repository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpNamespace;
use App\Repositories\EloquentRepository;

class RepositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:repository {repository} {dir} {model}';

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
        $arguments = $this->arguments();
        $modelName = $arguments['model'];
        $repositoryName = $this->argument('repository');
        $argumentName = (isset($arguments['dir'])) ? $this->argument('dir') :$this->argument('repository');
        $className = ucfirst($repositoryName).'Repository';
        $contractClassName = ucfirst($repositoryName).'RepositoryContract';

        $modelNamespace = 'App\Models\\'.ucfirst($modelName);
        $modelColumns = Db::columns((new $modelNamespace)->getTable());
        $modelIndexes = Db::indexes((new $modelNamespace)->getTable());

        $namespaceDirectory = 'App\Repositories\Resources\\'.ucfirst($argumentName);
        $eventsNamespaceDirectory = 'App\Repositories\Resources\\'.ucfirst($argumentName).'\\Events';
        $eventsRepositoryNamespaceDirectory = 'App\Repositories\Resources\\'.ucfirst($argumentName).'\\Events\\'.ucfirst($repositoryName);
        $namespaceRepository = 'App\Repositories\Resources\\'.ucfirst($argumentName).'\\'.$className;
        $namespaceContractDirectory = 'App\Repositories\Resources\\'.ucfirst($argumentName).'\Contracts';
        $eventsDirectory = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.''.ucfirst($argumentName).''.DIRECTORY_SEPARATOR.'Events';
        $eventsRepositoryDirectory = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.''.ucfirst($argumentName).''.DIRECTORY_SEPARATOR.'Events'.DIRECTORY_SEPARATOR.''.ucfirst($repositoryName);
        $directory = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.''.ucfirst($argumentName);
        $directoryContract = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.'Resources'.DIRECTORY_SEPARATOR.''.ucfirst($argumentName).''.DIRECTORY_SEPARATOR.'Contracts';

        if(!file_exists($directory)){
            File::makeDirectory($directory);
        }

        if(!file_exists($eventsDirectory)){
            File::makeDirectory($eventsDirectory);
        }

        if(!file_exists($eventsRepositoryDirectory)){
            File::makeDirectory($eventsRepositoryDirectory);
            $eventsRepositoryAfterCreateNamespace = new PhpNamespace($eventsRepositoryNamespaceDirectory);
            $traitAfterCreate = $eventsRepositoryAfterCreateNamespace->addTrait('AfterCreate');
            $traitMethod = $traitAfterCreate->addMethod('eventFireAfterCreate');
            $traitMethod->addComment('event performed after repository create');
            $traitMethod->addComment('');
            $traitMethod->addComment('@param array $result');
            $traitMethod->addComment('@param array $clientData');
            $traitMethod->addComment('@return void');
            $traitMethod->addParameter('result',[])->setType('array');
            $traitMethod->addParameter('clientData',[])->setType('array');
            $traitMethod->setBody('//');
            $traitMethod->setReturnType('void');
            touch($file = $eventsRepositoryDirectory.''.DIRECTORY_SEPARATOR.'AfterCreate.php');
            $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$eventsRepositoryAfterCreateNamespace;
            File::put($file,$content);

            $eventsRepositoryBeforeCreateNamespace = new PhpNamespace($eventsRepositoryNamespaceDirectory);
            $eventsRepositoryBeforeCreateNamespace->addTrait('BeforeCreate');
            $traitBeforeCreate = $eventsRepositoryBeforeCreateNamespace->addTrait('BeforeCreate');
            $traitMethod = $traitBeforeCreate->addMethod('eventFireBeforeCreate');
            $traitMethod->addComment('event performed before repository create');
            $traitMethod->addComment('');
            $traitMethod->addComment('@param array $clientData');
            $traitMethod->addComment('@return void');
            $traitMethod->addParameter('clientData',[])->setType('array');
            $traitMethod->setBody('//');
            $traitMethod->setReturnType('void');
            touch($file = $eventsRepositoryDirectory.''.DIRECTORY_SEPARATOR.'BeforeCreate.php');
            $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$eventsRepositoryBeforeCreateNamespace;
            File::put($file,$content);

            $eventsRepositoryAfterUpdateNamespace = new PhpNamespace($eventsRepositoryNamespaceDirectory);
            $traitAfterUpdate = $eventsRepositoryAfterUpdateNamespace->addTrait('AfterUpdate');
            $traitMethod = $traitAfterUpdate->addMethod('eventFireAfterUpdate');
            $traitMethod->addComment('event performed after repository update');
            $traitMethod->addComment('');
            $traitMethod->addComment('@param array $result');
            $traitMethod->addComment('@param array $clientData');
            $traitMethod->addComment('@return void');
            $traitMethod->addParameter('result',[])->setType('array');
            $traitMethod->addParameter('clientData',[])->setType('array');
            $traitMethod->setBody('//');
            $traitMethod->setReturnType('void');
            touch($file = $eventsRepositoryDirectory.''.DIRECTORY_SEPARATOR.'AfterUpdate.php');
            $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$eventsRepositoryAfterUpdateNamespace;
            File::put($file,$content);

            $eventsRepositoryBeforeUpdateNamespace = new PhpNamespace($eventsRepositoryNamespaceDirectory);
            $traitBeforeUpdate = $eventsRepositoryBeforeUpdateNamespace->addTrait('BeforeUpdate');
            $traitMethod = $traitBeforeUpdate->addMethod('eventFireBeforeUpdate');
            $traitMethod->addComment('event performed before repository update');
            $traitMethod->addComment('');
            $traitMethod->addComment('@param array $clientData');
            $traitMethod->addComment('@return void');
            $traitMethod->addParameter('clientData',[])->setType('array');
            $traitMethod->setBody('//');
            $traitMethod->setReturnType('void');
            touch($file = $eventsRepositoryDirectory.''.DIRECTORY_SEPARATOR.'BeforeUpdate.php');
            $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$eventsRepositoryBeforeUpdateNamespace;
            File::put($file,$content);
        }

        $namespace = new PhpNamespace($namespaceDirectory);
        $namespace->addUse(EloquentRepository::class);
        $namespace->addUse($afterCreateNamespace = $eventsRepositoryNamespaceDirectory.'\AfterCreate');
        $namespace->addUse($afterUpdateNamespace = $eventsRepositoryNamespaceDirectory.'\AfterUpdate');
        $namespace->addUse($beforeCreateNamespace = $eventsRepositoryNamespaceDirectory.'\BeforeCreate');
        $namespace->addUse($beforeUpdateNamespace =  $eventsRepositoryNamespaceDirectory.'\BeforeUpdate');
        $namespace->addUse('App\Models\\'.ucfirst($modelName));
        //$namespace->addUse(Builder::class);
        $namespace->addUse($contractClassRepositoryName = $namespaceContractDirectory.'\\'.ucfirst($contractClassName));
        $class = $namespace->addClass($className)->setExtends(EloquentRepository::class)->addImplement($contractClassRepositoryName);
        $class->addTrait($afterCreateNamespace);
        $class->addTrait($afterUpdateNamespace);
        $class->addTrait($beforeCreateNamespace);
        $class->addTrait($beforeUpdateNamespace);
        $class->addProperty('model',new Literal(ucfirst($modelName).'::class'))->setProtected()->setStatic(true)->setType('string')
            ->addComment('get model name for repository')
            ->addComment('')
            ->addComment('@var string');

        $class->addProperty('ranges',[])->setProtected()->setType('array')
            ->addComment('get client ranges for repository')
            ->addComment('')
            ->addComment('@var array|string[]');

        $localizationList = [];
        foreach ( $modelColumns as $column){
            if($column=='name' || Str::endsWith($column,'_name')){
                $localizationList[] = $column;
            }

            if($column=='description' || Str::endsWith($column,'_description')){
                $localizationList[] = $column;
            }
        }

        $class->addProperty('localization',$localizationList)->setProtected()->setType('array')
            ->addComment('localization values for repository')
            ->addComment('')
            ->addComment('@var array|string[]');

        $class->addProperty('hitter',[])->setProtected()->setType('array')
            ->addComment('hitter values for repository')
            ->addComment('')
            ->addComment('@var array|string[]');

        $class->addProperty('deniedEagerLoadings',[])->setProtected()->setType('array')
            ->addComment('denied eager loadings values for repository')
            ->addComment('')
            ->addComment('@var array');

        $class->addProperty('autoEagerLoadings',[])->setProtected()->setType('array')
            ->addComment('get auto eager loading values for repository')
            ->addComment('')
            ->addComment('@var array');

        $class->addProperty('groupByFields',[])->setProtected()->setType('array')
            ->addComment('it contains columns to be used by groupBy method.')
            ->addComment('')
            ->addComment('@var array');

        $class->addProperty('groupByProcessFields',[])->setProtected()->setType('array')
            ->addComment('it contains aggregate methods to be used together groupBy method.')
            ->addComment('')
            ->addComment('@var array');

        $class->addProperty('additionalResource',false)->setProtected()->setType('bool')
            ->addComment('get additional resource for repository')
            ->addComment('')
            ->addComment('@var bool');

        $class->addProperty('addPostQueries',[])->setProtected()->setType('array')
            ->addComment('add post query for repository')
            ->addComment('')
            ->addComment('@var array');

        $method = $class->addMethod(lcfirst($className));
        $method->addParameter('builder',null)->setNullable(true)->setType('object');
        $method->setBody('return $this->apply($builder);')->setReturnType('object');
        $method->addComment('get auto '.$className.' scope method')
            ->addComment('')
            ->addComment('@param object|null $builder')
            //->addComment('@param Builder $builder')
            ->addComment('@return object');

        /**$afterCreate = $class->addMethod('eventFireAfterCreate');
        $afterCreate->addParameter('result',[])->setType('array');
        $afterCreate->addParameter('clientData',[])->setType('array');
        $afterCreate->setBody('//')->setReturnType('void');
        $afterCreate->addComment('the fired event after create method for repository')
            ->addComment('')
            ->addComment('@param array $result')
            ->addComment('@param array $clientData')
            ->addComment('@return void');

        $afterUpdate = $class->addMethod('eventFireAfterUpdate');
        $afterUpdate->addParameter('result',[])->setType('array');
        $afterUpdate->addParameter('clientData',[])->setType('array');
        $afterUpdate->setBody('//')->setReturnType('void');
        $afterUpdate->addComment('the fired event after update method for repository')
            ->addComment('')
            ->addComment('@param array $result')
            ->addComment('@param array $clientData')
            ->addComment('@return void');**/

        touch($file = $directory.''.DIRECTORY_SEPARATOR.''.$className.'.php');
        $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$namespace;
        File::put($file,$content);

        if(!file_exists($directoryContract)){
            File::makeDirectory($directoryContract);
        }

        //add Contracts
        $namespace = new PhpNamespace($namespaceContractDirectory);
        $namespace->addUse($namespaceRepository);
        $class = $namespace->addInterface($contractClassName);

        $modelIndexList = [];
        foreach ($modelIndexes as $modelIndex){
            if(!in_array($modelIndex,$modelIndexList,true)){
                $class->addComment('@method $this '.Str::camel($modelIndex).'($'.$modelIndex.' = null)');
                $modelIndexList[] = $modelIndex;
            }
        }
        $class->addMethod('get')->setPublic()->setReturnType('array')
            ->addComment('@return array')->addComment('@see '.$className.'::get()');

        $class->addMethod('create')->setPublic()->setReturnType('array|object')
            ->addComment('@param array $data')
            ->addComment('@return array|object')->addComment('@see '.$className.'::create()')->addParameter('data',[])->setType('array');

        $updateMethod = $class->addMethod('update')->setPublic()->setReturnType('array|object');
        $updateMethod->addComment('@param array $data')
            ->addComment('@param bool $id')
            ->addComment('@return array|object')->addComment('@see '.$className.'::update()');

        $updateMethod->addParameter('data',[])->setType('array');
        $updateMethod->addParameter('id',true)->setType('bool');

        $interfaceMethodFind = $class->addMethod('find')->setPublic()->setReturnType('array');
        $interfaceMethodFind
            ->addComment('@param int $id')
            ->addComment('@param array|string[] $select')
            ->addComment('@return array')->addComment('@see '.$className.'::find()');

        $interfaceMethodAll = $class->addMethod('all')->setPublic()->setReturnType('array');
        $interfaceMethodAll
            ->addComment('@return array')->addComment('@see '.$className.'::all()');

        $interfaceMethodGetRepository = $class->addMethod('getRepository')->setPublic();
        $interfaceMethodGetRepository->addParameter('afterLoadingRepository',true)->setType('bool');
        $interfaceMethodGetRepository->setReturnType('array');
        $interfaceMethodGetRepository
            ->addComment('@param bool $afterLoadingRepository')
            ->addComment('@return array')->addComment('@see '.$className.'::getRepository()');

        $interfaceMethodLatest = $class->addMethod('latest')->setPublic();
        $interfaceMethodLatest->setReturnType('array');
        $interfaceMethodLatest
            ->addComment('@return array')->addComment('@see '.$className.'::latest()');

        $interfaceMethodSelect = $class->addMethod('select')->setPublic();
        $interfaceMethodSelect->addParameter('data',[])->setType('array');
        $interfaceMethodSelect->setReturnType('object');
        $interfaceMethodSelect
            ->addComment('@param array $data')
            ->addComment('@return object')->addComment('@see '.$className.'::select()');

        $interfaceMethodActive = $class->addMethod('active')->setPublic()->setReturnType('object');
        $interfaceMethodActive->addParameter('builder',null)->setType('object')->setNullable(true);
        $interfaceMethodActive
            ->addComment('@param object|null $builder')
            ->addComment('@return object')->addComment('@see '.$className.'::active()');

        $interfaceMethodCode = $class->addMethod('code')->setPublic();
        $interfaceMethodCode->addParameter('code',0)->setType('int');
        $interfaceMethodCode->setReturnType('object');
        $interfaceMethodCode
            ->addComment('@param int $code')
            ->addComment('@return object')->addComment('@see '.$className.'::code()');

        $interfaceMethodCache = $class->addMethod('cache')->setPublic();
        $interfaceMethodCache->addParameter('tag')->setType('mixed');
        $interfaceMethodCache->addParameter('callback')->setType('callable');
        $interfaceMethodCache->setReturnType('array');
        $interfaceMethodCache
            ->addComment('@param callable $callback')
            ->addComment('@param mixed $tag')
            ->addComment('@return array');

        $interfaceMethodFind->addParameter('id')->setType(new Literal('int'));
        $interfaceMethodFind->addParameter('select')->setType(new Literal('array'))->setDefaultValue(['*']);


        $interfaceMethodExists = $class->addMethod('exists')->setPublic()->setReturnType('bool');
        $interfaceMethodExists
            ->addComment('@param $field')
            ->addComment('@param $value')
            ->addComment('@return bool')->addComment('@see '.$className.'::exists()');

        $interfaceMethodExists->addParameter('field');
        $interfaceMethodExists->addParameter('value');

        $interfaceMethodUpdateOrCreate = $class->addMethod('updateOrCreate')->setPublic()->setReturnType('array|object');
        $interfaceMethodUpdateOrCreate
            ->addComment('@param array $updateData')
            ->addComment('@param array $createData')
            ->addComment('@return array|object')->addComment('@see '.$className.'::updateOrCreate()');

        $interfaceMethodUpdateOrCreate->addParameter('updateData',[])->setType('array');
        $interfaceMethodUpdateOrCreate->addParameter('createData',[])->setType('array');


        touch($file = $directoryContract.''.DIRECTORY_SEPARATOR.''.$contractClassName.'.php');
        $content = '<?php '.PHP_EOL.''.PHP_EOL.''.$namespace;
        File::put($file,$content);

        $repositoryClass = new Repository();

        if(!method_exists($repositoryClass,lcfirst($modelName))){

            $repositoryProvider = app_path('Providers').''.DIRECTORY_SEPARATOR.'RepositoryServiceProvider.php';
            $repositoryProviderContent = File::get($repositoryProvider);
            $putNewContract = str_replace('use Illuminate\Support\ServiceProvider;','use Illuminate\Support\ServiceProvider;
use '.$contractClassRepositoryName.';
use '.$namespaceRepository.';',$repositoryProviderContent);

            $putNewContract = str_replace('//newBind','$this->app->bind('.ucfirst($contractClassName).'::class,'.ucfirst($className).'::class);
        //newBind',$putNewContract);

            File::put($repositoryProvider,$putNewContract);


            $repositoryFile = app_path('Repositories').''.DIRECTORY_SEPARATOR.'Repository.php';

            $getRepositoryFile = File::get($repositoryFile);

            $getRepositoryFile = str_replace('use App\Repositories\Resources\User\Contracts\UserRepositoryContract;','use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use '.$contractClassRepositoryName.';',$getRepositoryFile);

            $getRepositoryFile = str_replace('class Repository
{','class Repository
{
    /**
     * get '.lcfirst($modelName).' repository instance
     *
     * @return '.$contractClassName.'
     */
    public static function '.lcfirst($modelName).'() : '.$contractClassName.'
    {
        return app()->get('.$contractClassName.'::class);
    }
    ',$getRepositoryFile);

            File::put($repositoryFile,$getRepositoryFile);
        }

        Artisan::call('create:resource',['repository' => $this->argument('repository'),'dir' => $this->argument('dir')]);


        $this->alert('RepositoryCommand created');

        return 1;
    }
}
