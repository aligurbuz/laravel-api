<?php

declare(strict_types=1);

namespace App\Services;

use App\Facades\Authenticate\ApiKey;
use App\Facades\Authenticate\Authenticate;
use App\Repositories\Repository;

/**
 * Class Client
 * @package App\Services
 */
class Client
{
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
}
