<?php

namespace App\Libs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpNamespace;

class FactoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:factory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create factory';

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
        $factory = $this->ask('What is factory name?', 'test');
        $factory = ucfirst($factory);
        $factoryFile = $this->ask('What is your filename for factory?', $factory);

        $mainNamespace = 'App\Factory\\' . $factory;
        $mainPath = app_path('Factory') . '' . DIRECTORY_SEPARATOR . '' . ucfirst($factory);
        $resourcePath = app_path('Factory') . '' . DIRECTORY_SEPARATOR . '' . ucfirst($factory) . '' . DIRECTORY_SEPARATOR . 'Resource';
        $resourceNamespace = 'App\Factory\\' . $factory . '\Resource';
        $interfacePath = app_path('Factory') . '' . DIRECTORY_SEPARATOR . '' . ucfirst($factory) . '' . DIRECTORY_SEPARATOR . 'Interfaces';
        $interfaceNamespace = 'App\Factory\\' . $factory . '\Interfaces';

        $factoryInterfaceName = $factory . 'Interface';
        $factoryInterfacePath = app_path('Factory') . '' . DIRECTORY_SEPARATOR . '' . ucfirst($factory) . '' . DIRECTORY_SEPARATOR . 'Interfaces' . DIRECTORY_SEPARATOR . '' . $factoryInterfaceName . '.php';
        $factoryInterfaceNamespace = 'App\Factory\\' . $factory . '\Interfaces\\' . $factoryInterfaceName;

        if (!file_exists($mainPath)) {
            File::makeDirectory($mainPath);
            File::makeDirectory($resourcePath);
            File::makeDirectory($interfacePath);
            touch($resourcePath . '' . DIRECTORY_SEPARATOR . 'resource.html');
        }

        $factoryFilePath = $mainPath . '' . DIRECTORY_SEPARATOR . '' . $factoryFile . '.php';
        $factoryFileNamespace = $mainNamespace . '\\' . $factoryFile;
        $factoryManagerName = $factory . 'Manager';
        $factoryManagerPath = $mainPath . '' . DIRECTORY_SEPARATOR . '' . $factoryManagerName . '.php';
        $factoryManagerNamespace = $mainNamespace . '\\' . $factoryManagerName;

        if (!file_exists($factoryFilePath)) {
            touch($factoryFilePath);

            $namespace = new PhpNamespace($mainNamespace);
            $namespace->addUse($factoryInterfaceNamespace);
            $addClass = $namespace->addClass($factoryFile);
            $addClass->addComment('Class ' . $factoryFile);
            $addClass->addComment('@package ' . $mainNamespace);
            $addClass->setExtends($factoryManagerNamespace);
            $addClass->addImplement($factoryInterfaceNamespace);
            $addClass->addProperty('binds')->setType('array')->setProtected()->setValue([])
                ->addComment('binds property variable')
                ->addComment('')
                ->addComment('@var array');

            $method = $addClass->addMethod('__construct');
            $method->addComment($factoryFile . ' constructor');
            $method->addComment('');
            $method->addComment('@param array $binds');
            $method->addParameter('binds', [])->setType('array');
            $method->setBody('$this->binds = $binds;');

            $content = '<?php ' . PHP_EOL . '' . PHP_EOL . 'declare(strict_types=1);' . PHP_EOL . '' . PHP_EOL . '' . $namespace;
            File::put($factoryFilePath, $content);
        }

        if (!file_exists($factoryManagerPath)) {
            touch($factoryManagerPath);
        }


        $namespaceManager = new PhpNamespace($mainNamespace);
        $namespaceManager->addUse(Str::class);
        $addClass = $namespaceManager->addClass($factoryManagerName)->setAbstract();

        $method = $addClass->addMethod('resource');
        $method->addComment('get resource for bind');
        $method->addComment('');
        $method->addComment('@param string $resource');
        $method->addComment('@return object');
        $method->addParameter('resource')->setType('string');
        $method->setReturnType('object');
        $method->setBody('return $this->binds[\'resource\'][$resource] ?? new class {};');

        $method = $addClass->addMethod('getResource');
        $method->addComment('calling magic method for resource');
        $method->addComment('');
        $method->addComment('@param string $resource');
        $method->addComment('@return mixed');
        $method->addParameter('resource')->setType('string');
        $method->setReturnType('mixed');
        $method->setBody('return $this->resource($resource)->get();');


        $method = $addClass->addMethod('get');
        $method->addComment('get method for gate factory');
        $method->addComment('');
        $method->addComment('@return mixed');
        $method->setReturnType('mixed');
        $method->setBody('
        if(method_exists($this,$who = who())){
    return $this->{$who}();
}

$class = Str::camel(class_basename($this));
return $this->{$class}();');

        $content = '<?php ' . PHP_EOL . '' . PHP_EOL . 'declare(strict_types=1);' . PHP_EOL . '' . PHP_EOL . '' . $namespaceManager;
        File::put($factoryManagerPath, $content);

        if (!file_exists($factoryInterfacePath)) {
            touch($factoryInterfacePath);
            $namespaceInterface = new PhpNamespace($interfaceNamespace);
            $addClass = $namespaceInterface->addInterface($factoryInterfaceName);

            $content = '<?php ' . PHP_EOL . '' . PHP_EOL . 'declare(strict_types=1);' . PHP_EOL . '' . PHP_EOL . '' . $namespaceInterface;
            File::put($factoryInterfacePath, $content);
        }

        return 0;
    }
}
