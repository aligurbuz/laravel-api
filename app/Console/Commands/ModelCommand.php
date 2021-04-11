<?php

namespace App\Console\Commands;

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
        $modelFile = app_path('Models').''.DIRECTORY_SEPARATOR.''.ucfirst($this->argument('model')).'.php';

        Artisan::call('make:model',['name' => ucfirst($this->argument('model'))]);

        $modelFileContent = File::get($modelFile);

        $modelFileChange = str_replace('use Illuminate\Database\Eloquent\Model;','use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;',$modelFileContent);

        $modelFileChange = str_replace('use HasFactory;','use HasFactory,BaseManager;',$modelFileChange);

        File::put($modelFile,$modelFileChange);

        return 0;
    }
}
