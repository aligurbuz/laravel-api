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
        $headers = json_decode(File::get($headerJsonFile),1);

        return view('api.index',['postman' => Postman::collection(),'headers' => $headers]);
    }
}
