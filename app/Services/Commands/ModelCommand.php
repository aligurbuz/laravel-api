<?php

namespace App\Services\Commands;

use App\Constants;
use App\Services\AppContainer;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class ModelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:model {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create model';

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
        $baseModel = $this->argument('model');
        $baseModelNamespace = Constants::modelNamespace.'\\'.ucfirst($baseModel);
        AppContainer::setWithTerminating('testModel',$baseModel);
        AppContainer::setWithTerminating('testModelNamespace',$baseModelNamespace);

        $modelFile = app_path('Models') . '' . DIRECTORY_SEPARATOR . '' . ucfirst($baseModel) . '.php';

        Artisan::call('make:model', ['name' => ucfirst($baseModel)]);

        $modelFileContent = File::get($modelFile);

        $modelFileChange = str_replace('use Illuminate\Database\Eloquent\Model;', 'use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;', $modelFileContent);

        $modelFileChange = str_replace('use HasFactory;', 'use HasFactory,BaseManager;

    protected array $searchable = [];

    protected array $withQuery = [];

    protected $hidden = [\'id\'];', $modelFileChange);

        File::put($modelFile, $modelFileChange);

        return 0;
    }
}
