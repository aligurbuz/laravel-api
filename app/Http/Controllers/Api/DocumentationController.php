<?php

namespace App\Http\Controllers\Api;

use App\Services\Postman;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class DocumentationController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        //doc header.json
        $headerJsonFile = app_path('Docs').''.DIRECTORY_SEPARATOR.'header.json';
        $headers = json_decode(File::get($headerJsonFile),true);

        //description.json
        $descriptionJsonFile = app_path('Docs').''.DIRECTORY_SEPARATOR.'description.json';
        $description = json_decode(File::get($descriptionJsonFile),true);

        return view('api.index',[
            'postman' => $collection = Postman::getCollectionAccordingToIgnore(),
            'headers' => $headers,
            'action' => $this->getActionIdFromCollection(request()->query->get('action'),$collection),
            'arrayRules' => arrayRules(),
            'descriptions' => $description
        ]);
    }

    /**
     * get action id from collection
     *
     * @param ?string $action
     * @param array $collection
     * @return ?int
     */
    private function getActionIdFromCollection(?string $action,array $collection = []) : ?int
    {
        foreach ($collection['item'] as $key => $value){
            if($value['name']==$action){
                return $key;
            }
        }

        return null;
    }
}
