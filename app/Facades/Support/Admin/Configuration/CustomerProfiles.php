<?php

namespace App\Facades\Support\Admin\Configuration;

use App\Libs\Http\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;
use JsonException;

trait CustomerProfiles
{
    /**
     * @param string $endpoint
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function customerProfiles(string $endpoint): array
    {
        [$httpRequest, $columns, $indexes, $data] = self::extracted($endpoint);

        return [
            'data' => $httpRequest,
            'widgets' => [
                'table' => [
                    'columns' => $columns,
                    'indexes' => $indexes,
                    'data' => $data
                ]
            ]
        ];
    }

    public static function extraTableColumns(): array
    {
        return [
            'after' => 'email',
            'keys' => [
                'age' => 'age',
                'gender' => 'gender',
            ]
        ];
    }

    /**
     * @param string $requestUri
     * @param array $params
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function getHttpRequest(string $requestUri, array $params): array
    {
        return Http::get($requestUri, $params);
    }

    /**
     * @return array
     */
    public static function getParams(): array
    {
        $params = array_merge(
            request()->query->all(),
            [
                'with' => [
                    'customerAges' => ['select' => '*']
                ]
            ]
        );

        request()->query->replace($params);

        return $params;
    }

    /**
     * @return array
     */
    public static function getWithValues(): array
    {
        return request()->with ?? [];
    }

    /**
     * @param string $endpoint
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function extracted(string $endpoint): array
    {
        $requestUri = Str::snake($endpoint, '/');
        $params = self::getParams();
        $httpRequest = self::getHttpRequest($requestUri, $params);

        $model = getModelFromEndpoint($requestUri);
        $repository = getModelInstance($model)->getRepository();
        $columns = array_values(array_diff($repository->getColumns(), ['id', 'password']));
        $indexes = $repository->getIndexes();
        $indexes = array_diff(array_unique($indexes), ['id', 'password']);
        $data = $httpRequest['resource'][0]['data'] ?? [];
        $getWithValues = static::getWithValues();

        if (isset($data[0])) {
            $columns = [];
            foreach ($data[0] as $key => $value) {
                if(!isset($getWithValues[Str::camel($key)])){
                    $columns[] = $key;
                }
            }
        }

        return array($httpRequest, $columns, $indexes, $data);
    }
}
