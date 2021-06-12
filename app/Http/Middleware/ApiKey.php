<?php

namespace App\Http\Middleware;

use App\Services\ApiKeyManager;

class ApiKey extends ApiKeyManager
{
    /**
     * api keys for client
     *
     * @var array|string[]
     */
    protected array $apiKeys = [
        'web'           => '16a43836036ead1a475de70bab62ba5c',
        'ios'           => '26a43836036ead1a475de70bab62ba5c',
        'admin'         => '36a43836036ead1a475de70bab62ba5c',
        'android'       => '46a43836036ead1a475de70bab62ba5c',
        'superAdmin'    => '56a43836036ead1a475de70bab62ba5c',
    ];
}
