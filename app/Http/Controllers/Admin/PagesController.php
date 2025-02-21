<?php

namespace App\Http\Controllers\Admin;

use App\Facades\Support\Admin\Configuration\Configuration;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
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
            'resource' => $this->configuration($endpoint),
        ]
        ]);
    }

    public function store(Request $request)
    {
        return ['success' => true];
    }

    /**
     * @throws ConnectionException
     * @throws JsonException
     */
    private function configuration(string $endpoint): array
    {
        if(method_exists(Configuration::class, $endpoint)) {
            return Configuration::$endpoint($endpoint);
        }

        return Configuration::handle($endpoint);
    }
}
