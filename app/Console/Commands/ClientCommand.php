<?php

namespace App\Console\Commands;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpNamespace;

class ClientCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:client {dir} {client} {method} {model?}';

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
        $clientDir = ucfirst($this->argument('dir'));
        $clientName = ucfirst($this->argument('client'));
        $method = ucfirst($this->argument('method'));

        $modelName = ucfirst($this->argument('model'));
        $model = 'App\Models\\'.$modelName;

        $dirPath = app_path('Client').''.DIRECTORY_SEPARATOR.''.$clientDir;
        $namePath = app_path('Client').''.DIRECTORY_SEPARATOR.''.$clientDir.''.DIRECTORY_SEPARATOR.''.$clientName;
        $methodPath = app_path('Client').''.DIRECTORY_SEPARATOR.''.$clientDir.''.DIRECTORY_SEPARATOR.''.$clientName.''.DIRECTORY_SEPARATOR.''.$method;
        $namespace = 'App\Client\\'.$clientDir.'\\'.$clientName.'\\'.$method;
        $className =  $method.'Client';
        $fileClass = app_path('Client').''.DIRECTORY_SEPARATOR.''.$clientDir.''.DIRECTORY_SEPARATOR.''.$clientName.''.DIRECTORY_SEPARATOR.''.$method.''.DIRECTORY_SEPARATOR.''.$className;


        if(!file_exists($dirPath)){
            File::makeDirectory($dirPath);
        }

        if(!file_exists($namePath)){
            File::makeDirectory($namePath);
        }

        if(!file_exists($methodPath)){
            File::makeDirectory($methodPath);
        }


        $generator = new PhpNamespace($namespace);
        $generator = $generator->addTrait($traitName = 'GeneratorTrait');

        if($method=='Create'){
            $generator->addMethod(strtolower($modelName).'CodeGenerator')->setReturnType('int')->setBody('return generateHash();')
                ->addComment('generates '.strtolower($modelName).'_code for client')
                ->addComment('')
                ->addComment('@return int');
        }

        if($method=='Update'){
            $generator->addMethod('isValid'.ucfirst($modelName).'CodeGenerator')
                ->setBody('if($this->has(\''.strtolower($modelName).'_code\') && !$this->repository()->exists(\''.strtolower($modelName).'_code\',$this->get(\''.strtolower($modelName).'_code\'))){
    inValidCodeException(\''.strtolower($modelName).'_code\',$this->get(\''.strtolower($modelName).'_code\'));
}

return null;')
                ->addComment('check if the '.strtolower($modelName).'_code is valid')
                ->addComment('')
                ->addComment('@return null');
        }

        if($method=='Create'){
            $generator->addProperty('generators',[Str::snake($modelName).'_code'])->setType('array')->setProtected()
                ->addComment('get auto generator for client')
                ->addComment('')
                ->addComment('@return array');

            $generator->addProperty('dontOverWriteGenerators',[Str::snake($modelName).'_code'])->setType('array')->setProtected()
                ->addComment('get dont overwrite generator for client')
                ->addComment('')
                ->addComment('@return array');
        }
        elseif($method=='Update'){
            $generator->addProperty('generators',['isValid'.ucfirst($modelName).'Code'])->setType('array')->setProtected()
                ->addComment('get auto generator for client')
                ->addComment('')
                ->addComment('@return array');

            $generator->addProperty('dontOverWriteGenerators',['isValid'.ucfirst($modelName).'Code'])->setType('array')->setProtected()
                ->addComment('get dont overwrite generator for client')
                ->addComment('')
                ->addComment('@return array');

        }
        else{
            $generator->addProperty('generators',[])->setType('array')->setProtected()
                ->addComment('get auto generator for client')
                ->addComment('')
                ->addComment('@return array');

            $generator->addProperty('dontOverWriteGenerators',[])->setType('array')->setProtected()
                ->addComment('get dont overwrite generator for client')
                ->addComment('')
                ->addComment('@return array');
        }


        $file = $methodPath.''.DIRECTORY_SEPARATOR.''.$traitName.'.php';

        if(!file_exists($file)){
            touch($file = $methodPath.''.DIRECTORY_SEPARATOR.''.$traitName.'.php');
            $content = '<?php '.PHP_EOL.''.PHP_EOL.'namespace '.$namespace.'; '.PHP_EOL.''.PHP_EOL.''.$generator;
            File::put($file,$content);
        }

        $generatorClass = new PhpNamespace($namespace);
        $generatorClass->addUse(Client::class);
        $generatorClass->addUse(ClientAutoGeneratorTrait::class);
        $generatorClass->addUse($model);
        $classGenerator = $generatorClass->addClass($className)->setExtends(Client::class);
        $classGenerator->addTrait($namespace.'\\'.$traitName);
        $classGenerator->addTrait(ClientAutoGeneratorTrait::class);

        $classGenerator->addProperty('capsule',[])->setType('array')->setProtected()
            ->addComment('get capsule for client')
            ->addComment('')
            ->addComment('@var array');

        $classGenerator->addProperty('model',[new Literal($modelName.'::class')])->setType('array')->setProtected()
            ->addComment('get model entity validation')
            ->addComment('')
            ->addComment('@var array|string[]');

        if($method=='Update'){
            $classGenerator->addProperty('rule',[
                strtolower($modelName).'_code' => 'required|integer'
            ])->setType('array')->setProtected()
                ->addComment('get rule for client')
                ->addComment('')
                ->addComment('@var array');
        }
        else{
            $classGenerator->addProperty('rule',[])->setType('array')->setProtected()
                ->addComment('get rule for client')
                ->addComment('')
                ->addComment('@var array');
        }


        $file = $fileClass.'.php';

        if(!file_exists($file)){
            touch($file = $fileClass.'.php');
            $content = '<?php '.PHP_EOL.''.PHP_EOL.''.$generatorClass;
            File::put($file,$content);
        }

        $this->warn('client has been created');
        return 1;
    }
}
