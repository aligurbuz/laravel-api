<?php

declare(strict_types=1);

namespace App\Libs;

use App\Facades\Database\Authenticate\ApiKey;
use App\Facades\Database\Authenticate\Authenticate;
use App\Repositories\Repository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

/**
 * Class Client
 * @package App\Services
 */
class Client
{
    /**
     * @var array|string[]
     */
    public static array $methods = [
        'get' => 'get',
        'post' => 'create',
        'put' => 'update',
    ];

    /**
     * get client fingerprint for request
     *
     * @param array $clientData
     * @return int
     */
    public static function fingerPrint(array $clientData = []): int
    {
        $request = request();

        return crc32(sha1(serialize(json_encode([
            ApiKey::who(),
            $request->method(),
            $request->url(),
            count($clientData) ? $clientData : request()->query->all(),
            Authenticate::code(),
            $request->header('accept-language'),
            $request->header('apikey')
        ]))));
    }

    /**
     * get content type for client
     *
     * @param bool $format
     * @return string
     */
    public static function contentType(bool $format = false): string
    {
        $default = 'application/' . config('app.defaultApiResponseFormatter');
        $contentType = AppContainer::get('contentType');
        $validContentTypes = AppContainer::get('validContentTypes');

        if ($format) {
            return $validContentTypes[$contentType] ?? $default;
        }

        return $contentType ?? $default;
    }

    /**
     * get client mirror for client service
     *
     * @param string $model
     * @return array
     */
    public static function mirror(string $model): array
    {
        $list = [];

        $repository = Repository::$model();

        foreach (static::data() as $key => $value) {
            $mirror = $repository->getRecursiveMirror($model, $value[$repository->getModelCode()]);

            if (!is_null($mirror)) {
                $list[$key] = array_replace_recursive($value, $mirror);
            }
        }

        return $list;
    }

    /**
     * get client data
     *
     * @return array
     */
    public static function data(): array
    {
        if (AppContainer::has('clientData')) {
            $clientData = AppContainer::get('clientData');

            if (request()->method() === 'GET') {
                return $clientData['params'] ?? [];
            }

            return $clientData['body'] ?? [];
        }

        if (request()->method() === 'GET') {
            return request()->query->all();
        }

        return request()->request->all();
    }

    /**
     * client attribute for client service
     *
     * @param string $key
     * @param callable $callback
     * @return array|mixed
     */
    public static function attribute(string $key, callable $callback): mixed
    {
        return clientAttribute($key, $callback);
    }

    /**
     * set filter for client data
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public static function setFilter(string $key, string $value): void
    {
        $request = request()->query;
        $queries = $request->all();

        $queries['filter'][$key] = $value;

        $request->replace($queries);
    }

    /**
     * set filter for client data
     *
     * @param string $key
     * @param string $orderByCriteria
     * @return void
     */
    public static function setOrderBy(string $key, string $orderByCriteria = 'asc'): void
    {
        $request = request()->query;
        $queries = $request->all();

        $queries['orderBy'] = $key . ',' . $orderByCriteria;

        $request->replace($queries);
    }

    /**
     * set source for client data
     *
     * @param string $key
     * @return void
     */
    public static function setSource(string $key): void
    {
        $request = request()->query;
        $queries = $request->all();
        $key = Str::camel($key);

        $queries['source'] = $key;
        $queries['has'] = $key;

        $request->replace($queries);
    }

    /**
     * get client namespace for client
     *
     * @param string|null $model
     * @param string|null $method
     * @return array|object
     */
    public static function object(?string $model = null, ?string $method = null): array|object
    {
        $modelClients = database_path('columns') . DIRECTORY_SEPARATOR . 'modelClients.json';

        $content = json_decode(File::get($modelClients), true);

        $content = $content[ucfirst($model)] ?? $content;

        if (!is_null($method) && isset($content[$method])) {
            return new $content[$method]();
        }

        return $content;
    }

    /**
     * merges client query data with data
     *
     * @param array $data
     * @return array
     */
    public static function mergeQuery(array $data = []): array
    {
        $request = request()->query->all();

        request()->query->replace(array_merge_recursive($request, $data));

        return request()->query->all();
    }

    /**
     * @param array $data
     * @return void
     */
    public static function setRange(array $data = []): void
    {
        $ranges = getRanges();
        $list = [];

        foreach ($data as $datum) {
            if (!in_array($datum, $ranges, true)) {
                $list[] = $datum;
            }
        }

        $mergeRange = array_merge($ranges, $list);
        request()->query->set('range', implode(',', $mergeRange));
    }

    /**
     * @return void
     */
    public static function orderByOperationForRange(): void
    {
        $ranges = getRanges();
        $orderBy = ['asc', 'desc'];

        $orderByAdding = true;

        foreach ($orderBy as $value) {
            if (in_array($value, $ranges, true)) {
                $orderByAdding = false;
                break;
            }
        }

        if ($orderByAdding) {
            $mergeRequest = array_merge($ranges, ['desc']);
            request()->query->remove('range');
            request()->query->set('range', implode(',', $mergeRequest));
        }
    }

    /**
     * @return void
     */
    public static function statusOperationForRange(): void
    {
        $ranges = getRanges();
        $active = ['active', 'notDeleted', 'deleted'];

        $statusAdding = true;

        foreach ($active as $value) {
            if (in_array($value, $ranges, true)) {
                $statusAdding = false;
                break;
            }
        }

        if ($statusAdding) {
            $mergeRequest = array_merge($ranges, ['active']);
            request()->query->remove('range');
            request()->query->set('range', implode(',', $mergeRequest));
        }
    }

    public static function lang()
    {
        return AppContainer::get('clientLang');
    }
}
