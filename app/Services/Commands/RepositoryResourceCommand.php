<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Nette\PhpGenerator\PhpNamespace;

class RepositoryResourceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:resource {repository} {dir}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'creates a resource in repository';

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
        $dir = ucfirst($this->argument('dir'));
        $repository = ucfirst($this->argument('repository'));
        $repositoryNamespace = 'App\Repositories\\'.$dir.'\Resource';
        $resourcePath = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.''.$dir.''.DIRECTORY_SEPARATOR.'Resource';
        $resourceFilePath = app_path().''.DIRECTORY_SEPARATOR.'Repositories'.DIRECTORY_SEPARATOR.''.$dir.''.DIRECTORY_SEPARATOR.'Resource'.DIRECTORY_SEPARATOR.''.$repository.'Resource.php';

        if(!file_exists($resourcePath)){
            File::makeDirectory($resourcePath);
        }

        $namespace = new PhpNamespace($repositoryNamespace);
        $addClass = $namespace->addClass($repository.'Resource');

        $method = $addClass->addMethod('handle');
        $method->addComment('handle process for repository resource');
        $method->addComment('');
        $method->addComment('@param array $data');
        $method->addComment('@return array');
        $method->setReturnType('array')->setBody('return $data;');
        $method->addParameter('data',[])->setType('array');

        $method2 = $addClass->addMethod('additionalResourceHandler');
        $method2->addComment('additional resource handler for repository resource');
        $method2->addComment('');
        $method2->addComment('@param array $data');
        $method2->addComment('@return array');
        $method2->setReturnType('array')->setBody('return $data;');
        $method2->addParameter('data',[])->setType('array');

        touch($resourceFilePath);
        $content = '<?php '.PHP_EOL.''.PHP_EOL.'declare(strict_types=1);'.PHP_EOL.''.PHP_EOL.''.$namespace;
        File::put($resourceFilePath,$content);

        return 0;
    }
}
