<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Postman extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'postman:create {collection?}';

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
        $mockeryData = json_decode(File::get(app_path('Docs').''.DIRECTORY_SEPARATOR.'mockery.json'),1);
        $documentationConfig = config('documentation');
        $exceptMethods = $documentationConfig['exceptMethods'] ?? [];
        $postmanIgnores = $documentationConfig['ignores'] ?? [];
        $collection = ucfirst($this->argument('collection') ?? config('app.name'));

        $list = [];
        $list['info']['_postman_id'] = '7e099b49-992f-48b8-9515-37ae09f1af91';
        $list['info']['name'] = $collection;
        $list['info']['schema'] = 'https://schema.getpostman.com/json/collection/v2.1.0/collection.json';


        $dirList = [];
        $fileList = ($mapJson['files'] ?? []);

        foreach ($fileList as $key => $maps){
            $split = explode('/',$maps);
            if(!in_array($split[9],$postmanIgnores,true)){
                $dirList[$split[9]] = $key;
            }
        }

        ksort($dirList);


        foreach ($dirList as $dirFile => $dirKey){
            $mapContents = json_decode(File::get($fileList[$dirKey]),1);
            $mapItem = $mapContents['item'] ?? [];

            foreach ($mapItem as $mapItemKey => $mapItemData){

                if(isset($mapItemData['item'])){
                    foreach ($mapItemData['item'] as $mapItemItemKey => $mapItemItemData){
                        if(isset($mapItemItemData['request']['method'])){
                            $mapItemDataMethod = $mapItemItemData['request']['method'];
                            $serviceName = strtolower($mapItemItemData['name']);
                            $serviceExceptMethods = $exceptMethods[$serviceName] ?? [];


                            $mockeryName = $mapItemDataMethod.'_'.$mapItemItemData['name'];
                            if(isset($mockeryData[$mockeryName])){
                                foreach ($mockeryData[$mockeryName] as $mockType => $mockValue){
                                    if($mockType=='body'){
                                        $mapContents['item'][$mapItemKey]['item'][$mapItemItemKey]['request']['body'] = array_merge(($mapItemItemData['request']['body'] ?? []),$mockeryData[$mockeryName]['body']);
                                    }
                                    if($mockType=='formdata'){
                                        $mapContents['item'][$mapItemKey]['item'][$mapItemItemKey]['request']['body'] = array_merge(($mapItemItemData['request']['body'] ?? []),$mockeryData[$mockeryName]['formdata']);
                                    }
                                }
                            }

                            if(in_array($mapItemDataMethod,$serviceExceptMethods,true)){
                                unset($mapContents['item'][$mapItemKey]['item'][$mapItemItemKey]);
                            }
                        }
                    }

                }
                else{
                    if(!isset($mapItemData['item']) && isset($mapItemData['request']['method'])){
                        $mapItemDataMethod = $mapItemData['request']['method'];
                        $mockeryName = $mapItemDataMethod.'_'.$mapItemData['name'];
                        if(isset($mockeryData[$mockeryName])){
                            foreach ($mockeryData[$mockeryName] as $mockType => $mockValue){
                                if($mockType=='body'){
                                    $mapContents['item'][$mapItemKey]['request']['body'] = array_merge(($mapItemData['request']['body'] ?? []),$mockeryData[$mockeryName]['body']);
                                }
                                if($mockType=='formdata'){
                                    $mapContents['item'][$mapItemKey]['request']['body'] = array_merge(($mapItemData['request']['body'] ?? []),$mockeryData[$mockeryName]['formdata']);
                                }
                            }
                        }
                    }
                }

                if(isset($mapContents['item'][$mapItemKey]['item']) && is_array($mapContents['item'][$mapItemKey]['item'])){
                    $mapContents['item'][$mapItemKey]['item'] = array_values($mapContents['item'][$mapItemKey]['item']);
                }


            }

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

        return (in_array($method,$list,true));
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
