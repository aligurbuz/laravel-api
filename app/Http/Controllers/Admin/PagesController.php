<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libs\Http\Http;
use App\Repositories\Repository;
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
        $httpRequest = Http::get($requestUri);

        return [
            'data' => $httpRequest
        ];
    }
}
