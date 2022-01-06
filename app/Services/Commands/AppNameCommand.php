<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class AppNameCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'name {name} {default?}';

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
        $default = $this->argument('default');
        $envFile = File::get('.env');
        $name = $this->argument('name');

        if($default=='default'){
            $change = str_replace('APP_NAME=Api','APP_NAME='.ucfirst($name).'',$envFile);
            $change = str_replace('DB_DATABASE=api','DB_DATABASE='.$name.'',$change);
        }

        File::put('.env',$change);

        $postman = File::get('postman/Laravel.postman_collection.json');
        $postmanData = json_decode($postman,1);
        $postmanData['info']['name'] = ucfirst($name);


        File::put('postman/'.ucfirst($name).'.postman_collection.json',Collection::make($postmanData)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));


        $environment = File::get('postman/Api-Collections.postman_environment.json');
        $environmentChange = str_replace('localhost/api','localhost/'.$name,$environment);
        $environmentData = json_decode($environmentChange,1);
        $environmentData['name'] = ucfirst($name).'-Local';


        File::put('postman/'.ucfirst($environmentData['name']).'.postman_environment.json',Collection::make($environmentData)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));


        $this->warn('environment has been changed');
        return 0;
    }
}
