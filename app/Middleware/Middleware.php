<?php

namespace App\Middleware;

use App\Middleware\Traits\AcceptLanguage;
use App\Middleware\Traits\Permission;

class Middleware extends MiddlewareManager
{
    use Permission;
    use AcceptLanguage;

    /**
     * @var array|string[]
     */
    protected array $middlewares = [
        'init',
        'acceptLanguage',
        'permission',
    ];

    /**
     * init middleware for application
     *
     * @param string $route
     * @return void
     */
    protected function init(string $route): void
    {
        //
    }
}
