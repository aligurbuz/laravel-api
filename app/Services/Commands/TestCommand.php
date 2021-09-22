<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Facades\File;
use Nette\PhpGenerator\GlobalFunction;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\PsrPrinter;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:handle';

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
        $className = 'Foo';
        $namespace = new PhpNamespace($namespaceString = 'App\Generator\\'.$className);
        $class = $namespace->addClass($className);
        $class->addMethod('CarModel')->addComment('aaaa')
            ->addBody('return 1;')->setReturnType('bool');

        $generatorDirectory = app_path().''.DIRECTORY_SEPARATOR.'Generators';
        if(!file_exists($generatorDirectory)){
            File::makeDirectory($generatorDirectory);
        }

        touch($file = $generatorDirectory.''.DIRECTORY_SEPARATOR.''.$className.'.php');
        $content = '<?php '.PHP_EOL.''.PHP_EOL.''.$namespace;
        File::put($file,$content);

        $this->alert($namespace);

        return 1;
    }
}
