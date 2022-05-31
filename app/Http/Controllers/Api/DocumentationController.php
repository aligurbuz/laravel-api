<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Postman;
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
        if (isProduction()) {
            return view('api.noAccess');
        }

        //doc header.json
        $headerJsonFile = app_path('Docs') . '' . DIRECTORY_SEPARATOR . 'header.json';
        $headers = json_decode(File::get($headerJsonFile), true);

        return view('api.index', [
            'postman' => $collection = Postman::getCollectionAccordingToIgnore(),
            'headers' => $headers,
            'action' => $this->getActionIdFromCollection(request()->query('action'), $collection),
            'arrayRules' => config('documentation.arrayRules'),
            'descriptions' => config('documentation.definitions'),
            'definition' => request()->query('definition')
        ]);
    }

    /**
     * get action id from collection
     *
     * @param ?string $action
     * @param array $collection
     * @return ?int
     */
    private function getActionIdFromCollection(?string $action, array $collection = []): ?int
    {
        foreach ($collection['item'] as $key => $value) {
            if ($value['name'] == $action) {
                return $key;
            }
        }

        return null;
    }
}
