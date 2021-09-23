<?php

declare(strict_types=1);

namespace App\Services;

use App\Facades\Authenticate\ApiKey;
use App\Facades\Authenticate\Authenticate;

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
     * get client data
     *
     * @return array
     */
    public static function data() : array
    {
        if(AppContainer::has('clientData')){
            $clientData = AppContainer::get('clientData');

            if(request()->method()==='GET'){
                return $clientData['params'] ?? [];
            }

            return $clientData['body'] ?? [];
        }

        if(request()->method()==='GET'){
            return request()->query->all();
        }

        return request()->request->all();
    }

    /**
     * get content type for client
     *
     * @param bool $format
     * @return string
     */
    public static function contentType(bool $format = false) : string
    {
        $default            = 'application/'.config('app.defaultApiResponseFormatter');
        $contentType        = AppContainer::get('contentType');
        $validContentTypes  = AppContainer::get('validContentTypes');

        if($format){
            return $validContentTypes[$contentType] ?? $default;
        }

        return $contentType ?? $default;
    }
}
