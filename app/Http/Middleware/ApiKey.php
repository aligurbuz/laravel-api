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
        'web' => '96a43836036ead1a475de70bab62ba5c'
    ];
}
