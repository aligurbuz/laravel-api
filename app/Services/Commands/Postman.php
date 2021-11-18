<?php

namespace App\Services\Commands;

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
        $documentationConfig = config('documentation');

        $list = [];
        $list['info']['_postman_id'] = '7e099b49-992f-48b8-9515-37ae09f1af91';
        $list['info']['name'] = $collection = ucfirst($this->argument('collection'));
        $list['info']['schema'] = 'https://schema.getpostman.com/json/collection/v2.1.0/collection.json';


        $dirList = [];
        $fileList = ($mapJson['files'] ?? []);

        foreach ($fileList as $key => $maps){
            $split = explode('/',$maps);
            $dirList[$split[9]] = $key;
        }

        ksort($dirList);

        foreach ($dirList as $dirFile => $dirKey){
            $mapContents = json_decode(File::get($fileList[$dirKey]),1);
            $mapItem = $mapContents['item'] ?? [];

            foreach ($mapItem as $mapItemKey => $mapItemValue){
                $exceptList = [];
                foreach (($mapItemValue['item'] ?? []) as $valueKey => $valueItem){
                    if(!$this->isExceptMethod($valueItem['name'],$valueItem['request']['method'])){
                        $exceptList[$valueKey] = $valueItem;
                    }
                }

                $mapItemValue['item'] = array_values($exceptList);

                $mapItem[$mapItemKey] = $mapItemValue;
            }

            $mapContents['item'] = $mapItem;

            $list['item'][] = $mapContents;
        }

        $postmanFile = base_path('postman').''.DIRECTORY_SEPARATOR.''.$collection.'.postman_collection.json';

        File::put($postmanFile,Collection::make($list)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        return 0;
    }

    /**
     * @param string $name
     * @param string $method
     * @return bool
     */
    private function isExceptMethod(string $name,string $method) : bool
    {
        $name = $this->getExceptMethodName($name);

        $documentationConfig = config('documentation');
        $exceptMethods = $documentationConfig['exceptMethods'] ?? [];

        $list = $exceptMethods['all'] ?? [];

        if(isset($exceptMethods[$name])){
            $list = $exceptMethods[$name];
        }

        return (in_array($method,$list,1));
    }

    /**
     * @param string $name
     * @return string
     */
    private function getExceptMethodName(string $name) : string
    {
        $nameExplode = explode('/',$name);
        $name = lcfirst($nameExplode[0]);

        if(isset($nameExplode[1])){
            $name = $name.'/'.lcfirst($nameExplode[1]);
        }

        return $name;
    }
}
