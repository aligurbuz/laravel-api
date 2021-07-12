<?php

namespace App\Console\Commands;

use App\Repositories\EloquentRepository;
use App\Repositories\Repository;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpNamespace;

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

        $namespaceDirectory = 'App\Repositories\\'.ucfirst($argumentName);
        $namespaceRepository = 'App\Repositories\\'.ucfirst($argumentName).'\\'.$className;
        $namespaceContractDirectory = 'App\Repositories\\'.ucfirst($argumentName).'\Contracts';
        $directory = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.''.ucfirst($argumentName);
        $directoryContract = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.''.ucfirst($argumentName).''.DIRECTORY_SEPARATOR.'Contracts';

        if(!file_exists($directory)){
            File::makeDirectory($directory);
        }

        $namespace = new PhpNamespace($namespaceDirectory);
        $namespace->addUse(EloquentRepository::class);
        $namespace->addUse('App\Models\\'.ucfirst($modelName));
        //$namespace->addUse(Builder::class);
        $namespace->addUse($contractClassRepositoryName = $namespaceContractDirectory.'\\'.ucfirst($contractClassName));
        $class = $namespace->addClass($className)->setExtends(EloquentRepository::class)->addImplement($contractClassRepositoryName);
        $class->addProperty('model',new Literal(ucfirst($modelName).'::class'))->setProtected()->setStatic(true)->setType('string')
            ->addComment('get model name for repository')
            ->addComment('')
            ->addComment('@var string');

        $class->addProperty('ranges',[])->setProtected()->setType('array')
            ->addComment('get client ranges for repository')
            ->addComment('')
            ->addComment('@var array|string[]');

        $method = $class->addMethod(lcfirst($className));
        $method->addParameter('builder',null)->setNullable(true)->setType('object');
        $method->setBody('return $this->apply($builder);')->setReturnType('object');
        $method->addComment('get auto '.$className.' scope method')
            ->addComment('')
            ->addComment('@param object|null $builder')
            //->addComment('@param Builder $builder')
            ->addComment('@return object');

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

            $getRepositoryFile = str_replace('use App\Repositories\User\Contracts\UserRepositoryContract;','use App\Repositories\User\Contracts\UserRepositoryContract;
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


        $this->alert('RepositoryCommand created');

        return 1;
    }
}
