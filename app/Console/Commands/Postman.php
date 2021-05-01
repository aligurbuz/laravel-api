<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class Postman extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'postman:create {collection}';

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
        $mapJson = json_decode(File::get(app_path('Docs').''.DIRECTORY_SEPARATOR.'map.json'),1);

        $list = [];
        $list['info']['_postman_id'] = '7e099b49-992f-48b8-9515-37ae09f1af91';
        $list['info']['name'] = $collection = ucfirst($this->argument('collection'));
        $list['info']['schema'] = 'https://schema.getpostman.com/json/collection/v2.1.0/collection.json';

        foreach ($mapJson as $key => $maps){
            $mapContents = json_decode(File::get($maps),1);
            $list['item'][$key] = $mapContents;
        }

        $postmanFile = base_path('postman').''.DIRECTORY_SEPARATOR.''.$collection.'.postman_collection.json';

        File::put($postmanFile,Collection::make($list)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        return 0;
    }
}
