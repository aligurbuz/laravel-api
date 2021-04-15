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

        return crc32(sha1(serialize(json_encode(array_merge_recursive(
            [$request->method(), $request->url()],
            [$request->query->all(), $request->request->all(), $request->ip(), auth()->user()->getAuthIdentifierName(), time()]
        )))));
    }
}
