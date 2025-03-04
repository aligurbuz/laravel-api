<?php

namespace App\Http\Controllers\Admin;

use App\Facades\Support\Admin\Configuration\Configuration;
use App\Http\Controllers\Controller;
use App\Libs\Http\Http;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
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
            'resource' => $this->configuration($endpoint),
        ]
        ]);
    }

    /**
     * @param Request $request
     * @param string $endpoint
     * @param string $code
     * @return Factory|Application|View
     * @throws ConnectionException
     * @throws JsonException
     */
    public function edit(Request $request, string $endpoint, string $code): Factory|Application|View
    {
        $requestUri = Str::snake($endpoint, '/');
        $model = getModelFromEndpoint($requestUri);
        $repository = getModelInstance($model)->getRepository();
        $httpRequest = Http::get($requestUri, [
            'filter' => [
                $repository->getModelCode() => $code
            ]
        ]);

        return view('admin.index', ['config' => [
            'endpoint' => $endpoint,
            'edit' => true,
            'method' => $request->method(),
            'resource' => $httpRequest,
            'data' => $httpRequest['resource'][0]['data'][0] ?? [],
            'code_column' => $repository->getModelCode(),
            'types' => $repository->getColumnTypes(),
        ]
        ]);
    }

    /**
     * @throws JsonException
     * @throws ConnectionException
     */
    public function store(Request $request): array
    {
        $page = Str::snake($request->get('__page'),'/');
        $client = collect($request->all())->except(['__page','_token'])->whereNotNull();
        $cleanClient = $this->removeNullValues($client->toArray());

        return Http::postJson($page,$cleanClient);

    }

    /**
     * @throws JsonException
     * @throws ConnectionException
     */
    public function update(Request $request): array
    {
        $page = Str::snake($request->get('__page'),'/');
        $client = collect($request->all())->except(['__page','_token'])->whereNotNull();
        $cleanClient = $this->removeNullValues($client->toArray());

        return Http::putJson($page,$cleanClient);

    }

    private function removeNullValues(array $array): array
    {
        foreach ($array as $key => &$value) {
            if (is_array($value)) {
                $value = $this->removeNullValues($value);

                if (empty($value)) {
                    unset($array[$key]);
                }
            } elseif (is_null($value)) {
                unset($array[$key]);
            }
        }

        return $array;
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
