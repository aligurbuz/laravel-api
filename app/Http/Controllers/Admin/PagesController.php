<?php

namespace App\Http\Controllers\Admin;

use App\Facades\Support\Admin\Configuration\Configuration;
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
            'resource' => $this->configuration($endpoint),
        ]
        ]);
    }

    /**
     * @throws JsonException
     * @throws ConnectionException
     */
    public function store(Request $request)
    {
        $page = Str::snake($request->get('__page'),'/');
        $client = collect($request->all())->except(['__page','_token'])->whereNotNull();
        $cleanClient = $this->removeNullValues($client->toArray());

        return Http::postJson($page,$cleanClient);

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
