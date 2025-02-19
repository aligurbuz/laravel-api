<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libs\Http\Http;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use JsonException;

class PagesController extends Controller
{

    /**
     * @throws ConnectionException
     * @throws JsonException
     */
    public function index(Request $request, $endpoint): View
    {
        return view('admin.index', ['config' => [
            'endpoint' => $endpoint,
            'method' => $request->method(),
            'resource' => $this->data($endpoint)
        ]
        ]);
    }

    /**
     * @param string $endpoint
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    private function data(string $endpoint): array
    {
        $requestUri = Str::snake($endpoint, '/');
        $params = \request()->query->all();
        $httpRequest = Http::get($requestUri, $params);

        $model = getModelFromEndpoint($requestUri);
        $repository = getModelInstance($model)->getRepository();
        $columns = array_values(array_diff($repository->getColumns(), ['id', 'password']));
        $data = $httpRequest['resource'][0]['data'] ?? [];

        if (isset($data[0])) {
            $columns = [];
            foreach ($data[0] as $key => $value) {
                $columns[] = $key;
            }
        }

        return [
            'data' => $httpRequest,
            'widgets' => [
                'table' => [
                    'columns' => $columns,
                    'data' => $data,
                ]
            ]
        ];
    }
}
