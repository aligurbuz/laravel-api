<?php

namespace App\Services;

class Client
{
    /**
     * get client finger print for request
     *
     * @return string
     */
    public static function fingerPrint(): string
    {
        $request = request();

        return crc32(sha1(serialize(json_encode([
            $request->method(),
            $request->url(),
            $request->query->all(),
            $request->request->all(),
            $request->ip(),
            auth()->user()->getAuthIdentifierName(), time()
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
}
