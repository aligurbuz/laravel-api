<?php

namespace App\Libs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Nette\PhpGenerator\PhpNamespace;

class RequestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:request {name}';

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
        $argumentName = $this->argument('name');
        $className = ucfirst($argumentName) . 'Request';

        $namespaceDirectory = 'App\Http\Requests';
        $directory = app_path() . '' . DIRECTORY_SEPARATOR . 'Http' . DIRECTORY_SEPARATOR . 'Requests';

        $namespace = new PhpNamespace($namespaceDirectory);
        $class = $namespace->addClass($className)->setExtends($namespaceDirectory . '\RequestManager');
        $class->addMethod('get')->addComment('throws exception for request')->addComment('')->addComment('@return void')
            ->addBody('$this->handle([
    //
]);')
            ->setReturnType('void');

        $class->addMethod('create')->addComment('throws exception for request')->addComment('')->addComment('@return void')
            ->addBody('$this->handle([
    //
]);')
            ->setReturnType('void');

        $class->addMethod('update')->addComment('throws exception for request')->addComment('')->addComment('@return void')
            ->addBody('$this->handle([
    \'id\' => \'required|integer\'
]);')
            ->setReturnType('void');

        touch($file = $directory . '' . DIRECTORY_SEPARATOR . '' . $className . '.php');
        $content = '<?php ' . PHP_EOL . '' . PHP_EOL . '' . $namespace;
        File::put($file, $content);

        $this->alert('Request created');

        return 1;
    }
}
