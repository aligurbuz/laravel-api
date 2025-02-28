<?php

namespace App\Facades\Support\Admin\Configuration;

use App\Facades\Support\Admin\Configuration\Resource\CustomerProfiles;
use App\Libs\Http\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;
use JsonException;
use function request;

class Configuration
{
    use CustomerProfiles;

    /**
     * @param string $endpoint
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function handle(string $endpoint): array
    {
        $requestUri = Str::snake($endpoint, '/');
        $params = request()->query->all();
        $httpRequest = Http::get($requestUri, $params);

        $model = getModelFromEndpoint($requestUri);
        $repository = getModelInstance($model)->getRepository();
        $columns = array_values(array_diff($repository->getColumns(), ['id', 'password']));
        $indexes = $repository->getIndexes();
        $indexes = array_diff(array_unique($indexes), ['id', 'password']);
        $data = $httpRequest['resource'][0]['data'] ?? [];

        if (isset($data[0])) {
            $columns = [];
            foreach ($data[0] as $key => $value) {
                $columns[] = $key;
            }
        }

        if(isset($httpRequest['resource'][0]['last_page'])) {
            $lastPage = $httpRequest['resource'][0]['last_page'];
        }

        return [
            'data' => $httpRequest,
            'last_page' => $lastPage ?? null,
            'ranges' => $httpRequest['instructions']['ranges'] ?? [],
            'relations' => $httpRequest['instructions']['relations'] ?? [],
            'repository' => $repository,
            'widgets' => [
                'table' => [
                    'columns' => $columns,
                    'indexes' => $indexes,
                    'data' => $data,
                ]
            ]
        ];
    }
}
