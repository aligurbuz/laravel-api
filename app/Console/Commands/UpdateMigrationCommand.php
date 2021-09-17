<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class UpdateMigrationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:migration {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update migration';

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
        $model = ucfirst($this->argument('model'));
        $serviceMapFile = base_path('database/columns/modelService.json');

        $services = json_decode(File::get($serviceMapFile),1);

        if(isset($services[$model])){
            $contents       = $services[$model];
            $controller     = lcfirst(($contents['controller'] ?? ''));
            $dir            = lcfirst(($contents['dir'] ?? ''));

            Artisan::call('migrate');
            Artisan::call('update:column',['model' => $this->argument('model')]);
            Artisan::call('doc:create',['controller' => $controller,'dir' => $dir,'model' => $this->argument('model')]);
            Artisan::call('postman:create',['collection' => config('app.name')]);
            Artisan::call('update:relation');

            $this->warn('your updating is success for migration');
            return 0;
        }

        $this->error('your updating is fail for migration');

        return 0;
    }
}
