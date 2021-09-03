<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class CrudCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:crud {controller} {dir} {model}';

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
        Artisan::call('create:controller',['controller' => $this->argument('controller'),'dir' => $this->argument('dir')]);
        //Artisan::call('create:request',['name' => $this->argument('controller')]);
        Artisan::call('create:model',['model' => $this->argument('model')]);
        Artisan::call('update:column',['model' => $this->argument('model')]);
        Artisan::call('create:repository',['repository' => $this->argument('controller'),'dir' => $this->argument('dir'),'model' => $this->argument('model')]);
        Artisan::call('create:client',['dir' => $this->argument('dir'),'client' => $this->argument('controller'),'method' => 'get','model' => $this->argument('model')]);
        Artisan::call('create:client',['dir' => $this->argument('dir'),'client' => $this->argument('controller'),'method' => 'create','model' => $this->argument('model')]);
        Artisan::call('create:client',['dir' => $this->argument('dir'),'client' => $this->argument('controller'),'method' => 'update','model' => $this->argument('model')]);

        $routeApi = app()->basePath('routes').''.DIRECTORY_SEPARATOR.'api.php';

        $routeApiContent = File::get($routeApi);

        $controllerVariable = $this->argument('controller');
        $dirVariable = $this->argument('dir') ?? $controllerVariable;

        $useController = 'App\Http\Controllers\\'.ucfirst($dirVariable).'\\'.ucfirst($controllerVariable).'Controller';

        $routeApiContent = str_replace('use Illuminate\Support\Facades\Route;','use Illuminate\Support\Facades\Route;
use '.$useController.';',$routeApiContent);

        if($controllerVariable!==$dirVariable){
            $endpointName = ''.$dirVariable.'/'.$controllerVariable;
        }
        else{
            $endpointName = $controllerVariable;
        }

        $routeApiContent = str_replace('->group(function(){','->group(function(){

    Route::get(\'/'.$endpointName.'\', ['.ucfirst($controllerVariable).'Controller::class,\'get\']);
    Route::post(\'/'.$endpointName.'\', ['.ucfirst($controllerVariable).'Controller::class,\'create\']);
    Route::put(\'/'.$endpointName.'\', ['.ucfirst($controllerVariable).'Controller::class,\'update\']);',$routeApiContent);

        File::put($routeApi,$routeApiContent);

        Artisan::call('doc:create',['controller' => $this->argument('controller'),'dir' => $this->argument('dir'),'model' => $this->argument('model')]);
        Artisan::call('postman:create',['collection' => config('app.name')]);

        $serviceMapFile = base_path('database/columns/service.json');

        if(file_exists($serviceMapFile)){
            $serviceMaps = File::get($serviceMapFile);
            $serviceMaps = json_decode($serviceMaps,1);

            if(!isset($serviceMaps[$this->argument('model')])){
                $newValues = [
                    $dirVariable.'/'.$controllerVariable => [
                        'controller' => ucfirst($controllerVariable),
                        'dir' => ucfirst($dirVariable)
                    ]
                ];

                $newServiceValues = array_merge_recursive($serviceMaps,$newValues);

                File::put($serviceMapFile,json_encode($newServiceValues));
            }
        }


        $this->warn('Crud has been created');
        return 0;
    }
}
