<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class FeatureTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feature:test:create {dir} {class}';

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
        $testFeaturePath = base_path('tests/Feature');
        $dir = ucfirst($this->argument('dir'));
        $class = ucfirst($this->argument('class'));

        if($dir==$class){
            $endpoint = $dir;
        }
        else{
            $endpoint = $dir.'/'.lcfirst($class);
        }

        $textFile = File::get(base_path('tests').''.DIRECTORY_SEPARATOR.'testExample.txt');
        $textFile = str_replace('__DIR__',$dir,$textFile);
        $textFile = str_replace('__CLASS__',$class,$textFile);
        $textFile = str_replace('__ENDPOINT__',lcfirst($endpoint),$textFile);
        $textFile = str_replace('__ENDPOINTMETHOD__',str_replace('/','_',lcfirst($endpoint)),$textFile);

        $dirPath = $testFeaturePath.''.DIRECTORY_SEPARATOR.''.$dir;
        $classPath = $testFeaturePath.''.DIRECTORY_SEPARATOR.''.$dir.''.DIRECTORY_SEPARATOR.''.$class.'Test.php';
        if(!file_exists($dirPath)){
            File::makeDirectory($dirPath);
        }

        if(!file_exists($classPath)){
            File::put($classPath,'<?php

'.$textFile);
        }
    }
}
