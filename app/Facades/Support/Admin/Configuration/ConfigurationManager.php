<?php

namespace App\Facades\Support\Admin\Configuration;

use App\Libs\Http\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Str;
use JsonException;

trait ConfigurationManager
{
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

        if(method_exists(static::class,'extraColumns')) {
            $extraColumns = static::extraColumns();
            $columns = arrayMergeAfterValue($columns,$extraColumns['keys'],$extraColumns['after']);

            foreach ($data as $key => $item){
                $item = arrayMergeAfterKey($item,$extraColumns['keysValue'],$extraColumns['after']);
                foreach ($extraColumns['keysValue'] as $extraKey => $extraValue){
                    $item[$extraKey] = static::getRecursiveValue($item,$extraValue);
                    $data[$key] = $item;
                }
            }
        }

        return array($httpRequest, $columns, $indexes, $data, $repository);
    }

    /**
     * @param $array
     * @param $path
     * @param string $delimiter
     * @return mixed|null
     */
    public static function getRecursiveValue($array, $path, string $delimiter = '.'): mixed
    {
        $keys = explode($delimiter, $path);

        foreach ($keys as $key) {
            if (is_array($array) && array_key_exists($key, $array)) {
                $array = $array[$key];
            } else {
                return null;
            }
        }

        return $array;
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
}
