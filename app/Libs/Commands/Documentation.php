<?php

namespace App\Libs\Commands;

use App\Libs\Db;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Documentation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:create {controller} {dir} {model}';

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
        $controller = ucfirst($this->argument('controller'));
        $dir = ucfirst($this->argument('dir'));
        $docPath = app_path('Docs') . '' . DIRECTORY_SEPARATOR . 'Endpoints';
        $getHeaders = json_decode(File::get(app_path('Docs') . '' . DIRECTORY_SEPARATOR . 'header.json'), 1);

        $model = $this->argument('model');
        $modelNamespace = 'App\Models\\' . ucfirst($this->argument('model'));
        $entities = Db::entities($modelNamespace);
        $columns = array_combine(($entities['columns'] ?? []), ($entities['types'] ?? []));
        unset($columns['created_at']);
        unset($columns['updated_at']);

        $isAvailableImage = false;

        foreach ($columns as $columnKey => $columnValue) {
            if ($columnValue == 'image') {
                $isAvailableImage = true;
            }

            if ($columnValue == 'file') {
                $isAvailableImage = true;
            }

            if (isset($entities['default_keys']) && in_array($columnKey, $entities['default_keys'], true)) {
                $searchKey = array_search($columnKey, $entities['default_keys']);
                $columns[$columnKey] = $entities['default_values'][$searchKey];
            }
        }

        $fingerPrint = $controller . '_' . $dir . '_' . $model;

        $dirControllerPath = $docPath . '' . DIRECTORY_SEPARATOR . '' . $dir;

        if (!file_exists($dirControllerPath)) {
            File::makeDirectory($dirControllerPath);
        }

        $fileControllerPath = $docPath . '' . DIRECTORY_SEPARATOR . '' . $dir . '' . DIRECTORY_SEPARATOR . '' . $dir . '.json';

        if (file_exists($fileControllerPath)) {
            $getFileControllerPath = json_decode(File::get($fileControllerPath), 1);
        } else {
            $getFileControllerPath = [];
        }

        $availableItems = $getFileControllerPath['item'] ?? [];

        $mapJson = File::get($mapJsonFile = app_path('Docs') . '' . DIRECTORY_SEPARATOR . 'map.json');
        $mapArray = json_decode($mapJson, 1);

        $key = $mapArray['keys'][$fileControllerPath] ?? -1;
        $key = $key + 1;

        if (isset($mapArray['fingerPrints'][$fingerPrint])) {
            $key = $mapArray['fingerPrints'][$fingerPrint];
        }

        if (!file_exists($fileControllerPath)) {
            touch($fileControllerPath);
        }

        if ($controller == $dir) {
            $endpointName = $controller;
            $endpoint = lcfirst($controller);
        } else {
            $endpointName = $dir . '/' . $controller;
            $endpoint = lcfirst($dir) . '/' . lcfirst($controller);
        }

        $list = [];

        if (count($availableItems)) {
            $list['item'] = $availableItems;
        }

        $list['name'] = $dir;
        $list['item'][$key]['name'] = $controller;
        $list['item'][$key]['item'][0]['name'] = $endpointName;
        $list['item'][$key]['item'][0]['response'] = [];
        $list['item'][$key]['item'][0]['request']['method'] = 'GET';
        $list['item'][$key]['item'][0]['request']['header'] = $getHeaders;
        $list['item'][$key]['item'][0]['request']['body'] = [];

        $list['item'][$key]['item'][0]['request']['url']['raw'] = '{{baseUrl}}/' . $endpoint;
        $list['item'][$key]['item'][0]['request']['url']['host'] = ["{{baseUrl}}"];
        $list['item'][$key]['item'][0]['request']['url']['path'] = explode('/', $endpoint);
        $list['item'][$key]['item'][0]['request']['url']['query'][0]['key'] = 'range';
        $list['item'][$key]['item'][0]['request']['url']['query'][0]['value'] = 'desc';
        $list['item'][$key]['item'][0]['request']['url']['query'][0]['description'] = '';
        $list['item'][$key]['item'][0]['request']['url']['query'][0]['disabled'] = true;

        $list['item'][$key]['item'][1]['name'] = $endpointName;
        $list['item'][$key]['item'][1]['response'] = [];
        $list['item'][$key]['item'][1]['request']['method'] = 'POST';
        $list['item'][$key]['item'][1]['request']['header'] = $getHeaders;

        if ($isAvailableImage === false) {
            $list['item'][$key]['item'][1]['request']['body']['mode'] = 'raw';
            $list['item'][$key]['item'][1]['request']['body']['raw'] = json_encode(array_diff_key($columns, [
                'id' => 'integer',
                'created_by' => 'integer',
                'updated_by' => 'integer',
                'deleted_by' => 'integer',
                'deleted_at' => 'timestamp',
                Str::snake($this->argument('model')) . '_code' => 'integer'
            ]));
        } else {

            $formdataValues = array_diff_key($columns, [
                'id' => 'integer',
                'created_by' => 'integer',
                'updated_by' => 'integer',
                'deleted_by' => 'integer',
                'deleted_at' => 'timestamp',
                Str::snake($this->argument('model')) . '_code' => 'integer'
            ]);

            $formDataList = [];
            $fcounter = -1;

            foreach ($formdataValues as $fkey => $fvalue) {
                $fcounter = ++$fcounter;
                $formDataList[$fcounter]['key'] = $fkey;
                $formDataList[$fcounter]['description'] = '';

                if (isset($columns[$fkey]) && $columns[$fkey] == 'image') {
                    $formDataList[$fcounter]['type'] = 'file';
                    $formDataList[$fcounter]['src'] = [];
                } elseif (isset($columns[$fkey]) && $columns[$fkey] == 'file') {
                    $formDataList[$fcounter]['type'] = 'file';
                    $formDataList[$fcounter]['src'] = [];
                } else {
                    $formDataList[$fcounter]['value'] = $fvalue;
                    $formDataList[$fcounter]['type'] = 'text';
                }

            }

            $list['item'][$key]['item'][1]['request']['body']['mode'] = 'formdata';
            $list['item'][$key]['item'][1]['request']['body']['formdata'] = $formDataList;
        }

        $list['item'][$key]['item'][1]['request']['body']['options']['raw']['language'] = 'json';

        $list['item'][$key]['item'][1]['request']['url']['raw'] = '{{baseUrl}}/' . $endpoint;
        $list['item'][$key]['item'][1]['request']['url']['host'] = ["{{baseUrl}}"];
        $list['item'][$key]['item'][1]['request']['url']['path'] = explode('/', $endpoint);
        $list['item'][$key]['item'][1]['request']['url']['query'] = [];


        $list['item'][$key]['item'][2]['name'] = $endpointName;
        $list['item'][$key]['item'][2]['response'] = [];
        $list['item'][$key]['item'][2]['request']['method'] = 'PUT';
        $list['item'][$key]['item'][2]['request']['header'] = $getHeaders;
        $list['item'][$key]['item'][2]['request']['body']['mode'] = 'raw';
        $columns['is_deleted'] = '0';
        $columns['status'] = '1';
        $list['item'][$key]['item'][2]['request']['body']['raw'] = json_encode(array_diff_key($columns, [
            'id' => 'integer',
            'created_by' => 'integer',
            'updated_by' => 'integer',
            'deleted_by' => 'integer',
            'deleted_at' => 'timestamp'
        ]));
        $list['item'][$key]['item'][2]['request']['body']['options']['raw']['language'] = 'json';

        $list['item'][$key]['item'][2]['request']['url']['raw'] = '{{baseUrl}}/' . $endpoint;
        $list['item'][$key]['item'][2]['request']['url']['host'] = ["{{baseUrl}}"];
        $list['item'][$key]['item'][2]['request']['url']['path'] = explode('/', $endpoint);
        $list['item'][$key]['item'][2]['request']['url']['query'] = [];

        $dirPath = $docPath . '' . DIRECTORY_SEPARATOR . '' . $dir;

        if (!file_exists($dirPath)) {
            File::makeDirectory($dirPath);
        }

        File::put($fileControllerPath, Collection::make($list)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        if (!in_array($fileControllerPath, ($mapArray['files'] ?? []))) {
            $mapArray['files'][] = $fileControllerPath;
            $mapArray['keys'][$fileControllerPath] = $key;
            $mapArray['fingerPrints'][$fingerPrint] = $key;
            File::put($mapJsonFile, Collection::make($mapArray)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        } else {
            $mapArray['keys'][$fileControllerPath] = $key;
            $mapArray['fingerPrints'][$fingerPrint] = $key;
            File::put($mapJsonFile, Collection::make($mapArray)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }

        $this->warn('doc has been successfully created');

        return 0;
    }
}
