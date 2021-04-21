<?php

namespace App\Console\Commands;

use App\Repositories\EloquentRepository;
use Illuminate\Console\Command;
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
    protected $signature = 'create:repository {repository} {dir?}';

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
        $namespace->addUse('App\Models\\'.ucfirst($repositoryName));
        $namespace->addUse($contractClassRepositoryName = $namespaceContractDirectory.'\\'.ucfirst($contractClassName));
        $class = $namespace->addClass($className)->setExtends(EloquentRepository::class)->addImplement($contractClassRepositoryName);
        $class->addProperty('model',new Literal(ucfirst($repositoryName).'::class'))->setProtected()->setStatic(true)->setType('string');

        touch($file = $directory.''.DIRECTORY_SEPARATOR.''.$className.'.php');
        $content = '<?php '.PHP_EOL.''.PHP_EOL.''.$namespace;
        File::put($file,$content);

        if(!file_exists($directoryContract)){
            File::makeDirectory($directoryContract);
        }

        //add Contracts
        $namespace = new PhpNamespace($namespaceContractDirectory);
        $namespace->addUse($namespaceRepository);
        $class = $namespace->addInterface($contractClassName);
        $class->addMethod('get')->setReturnType('array')
            ->addComment('@return array')->addComment('@see '.$className.'::get()');

        $class->addMethod('create')->setReturnType('array')
            ->addComment('@param array $data')
            ->addComment('@return array')->addComment('@see '.$className.'::create()')->addParameter('data',[])->setType('array');

        $class->addMethod('update')->setReturnType('array')
            ->addComment('@param array $data')
            ->addComment('@return array')->addComment('@see '.$className.'::update()')->addParameter('data',[])->setType('array');

        $class->addMethod('find')->setReturnType('array')
            ->addComment('@param $id')
            ->addComment('@return array')->addComment('@see '.$className.'::find()')->addParameter('id')->setType(new Literal('int'));


        touch($file = $directoryContract.''.DIRECTORY_SEPARATOR.''.$contractClassName.'.php');
        $content = '<?php '.PHP_EOL.''.PHP_EOL.''.$namespace;
        File::put($file,$content);

        $repositoryProvider = app_path('Providers').''.DIRECTORY_SEPARATOR.'RepositoryServiceProvider.php';
        $repositoryProviderContent = File::get($repositoryProvider);
        $putNewContract = str_replace('use Illuminate\Support\ServiceProvider;','use Illuminate\Support\ServiceProvider;
use '.$contractClassRepositoryName.';
use '.$namespaceRepository.';',$repositoryProviderContent);

        $putNewContract = str_replace('//newBind','$this->app->bind('.ucfirst($contractClassName).'::class,'.ucfirst($className).'::class);
        //newBind',$putNewContract);

        File::put($repositoryProvider,$putNewContract);


        $this->alert('RepositoryCommand created');

        return 1;
    }
}
