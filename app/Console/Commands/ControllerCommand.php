<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpNamespace;

class ControllerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:controller {controller} {dir?}';

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
        $controllerVariable = $this->argument('controller');
        $controllerName = ucfirst($controllerVariable).'Controller';
        $dirVariable = $this->argument('dir') ?? $controllerVariable;

        $controllerPath = app_path().''.DIRECTORY_SEPARATOR.'Http'.DIRECTORY_SEPARATOR.'Controllers';
        $controllerNamespace = 'App\Http\Controllers';

        $controllerEndpointPath = $controllerPath.''.DIRECTORY_SEPARATOR.''.ucfirst($dirVariable);
        $controllerEndpointPathNamespace = $controllerNamespace.'\\'.ucfirst($dirVariable);

        $controllerEndpointFilePath = $controllerPath.''.DIRECTORY_SEPARATOR.''.ucfirst($dirVariable).''.DIRECTORY_SEPARATOR.''.$controllerName.'.php';

        if(!file_exists($controllerEndpointPath)){
            File::makeDirectory($controllerEndpointPath);
        }

        if(!file_exists($controllerEndpointFilePath)){

            $namespace = new PhpNamespace($controllerEndpointPathNamespace);
            $addClass = $namespace->addClass($controllerName);
            $addClass->setExtends('App\Http\Controllers\Controller');

            $clientGetClass = 'App\Client\\'.$this->argument('dir').'\\'.$this->argument('controller').'\Get\GetClient';

            $method = $addClass->addMethod('get');
            $method->addComment('get '.$controllerVariable.' data');
            $method->addComment('');
            $method->addComment('@param GetClient $client');
            $method->addComment('@param '.ucfirst($controllerVariable).'RepositoryContract $'.$controllerVariable.'Repository');
            $method->addComment('@return array');
            $method->setReturnType('array')->setBody('$client->handle(); '.PHP_EOL.''.PHP_EOL.'return $'.$controllerVariable.'Repository->get();');
            $method->addParameter('client')->setType($clientGetClass);
            $method->addParameter($controllerVariable.'Repository')->setType('App\Repositories\\'.ucfirst($dirVariable).'\Contracts\\'.ucfirst($controllerVariable).'RepositoryContract');

            $clientCreateClass = 'App\Client\\'.$this->argument('dir').'\\'.$this->argument('controller').'\Create\CreateClient';

            $method = $addClass->addMethod('create');
            $method->addComment('create '.$controllerVariable.' data');
            $method->addComment(' ');
            $method->addComment('@param CreateClient $client');
            $method->addComment('@param '.ucfirst($controllerVariable).'RepositoryContract $'.$controllerVariable.'Repository');
            $method->addComment('@return array|object');
            $method->setReturnType('array|object')->setBody('$client->handle(); '.PHP_EOL.''.PHP_EOL.'return $'.$controllerVariable.'Repository->create();');
            $method->addParameter('client')->setType($clientCreateClass);
            $method->addParameter($controllerVariable.'Repository')->setType('App\Repositories\\'.ucfirst($dirVariable).'\Contracts\\'.ucfirst($controllerVariable).'RepositoryContract');

            $clientUpdateClass = 'App\Client\\'.$this->argument('dir').'\\'.$this->argument('controller').'\Update\UpdateClient';

            $method = $addClass->addMethod('update');
            $method->addComment('update '.$controllerVariable.' data');
            $method->addComment('  ');
            $method->addComment('@param UpdateClient $client');
            $method->addComment('@param '.ucfirst($controllerVariable).'RepositoryContract $'.$controllerVariable.'Repository');
            $method->addComment('@return array|object');
            $method->setReturnType('array|object')->setBody('$client->handle(); '.PHP_EOL.''.PHP_EOL.'return $'.$controllerVariable.'Repository->update();');
            $method->addParameter('client')->setType($clientUpdateClass);
            $method->addParameter($controllerVariable.'Repository')->setType('App\Repositories\\'.ucfirst($dirVariable).'\Contracts\\'.ucfirst($controllerVariable).'RepositoryContract');


            $namespace->addUse('App\Http\Controllers\Controller');
            $namespace->addUse($clientGetClass);
            $namespace->addUse($clientCreateClass);
            $namespace->addUse($clientUpdateClass);
            $namespace->addUse('App\Repositories\\'.ucfirst($dirVariable).'\Contracts\\'.ucfirst($controllerVariable).'RepositoryContract');


            touch($controllerEndpointFilePath);
            $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$namespace;
            File::put($controllerEndpointFilePath,$content);
        }


        return 1;
    }
}
