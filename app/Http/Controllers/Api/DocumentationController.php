<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;

class DocumentationController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        //postman.json
        $postmanJsonFile = base_path('postman').''.DIRECTORY_SEPARATOR.''.config('app.name').'.postman_collection.json';
        $postmanJsonArray = json_decode(File::get($postmanJsonFile),1);

        //doc header.json
        $headerJsonFile = app_path('Docs').''.DIRECTORY_SEPARATOR.'header.json';
        $headers = json_decode(File::get($headerJsonFile),1);

        return view('api.index',['postman' => $postmanJsonArray,'headers' => $headers]);
    }
}
