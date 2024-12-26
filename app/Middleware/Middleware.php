<?php

namespace App\Middleware;

use App\Middleware\Traits\Permission;

class Middleware extends MiddlewareManager
{
    use Permission;

    /**
     * @var array|string[]
     */
    protected array $middlewares = [
        'init',
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
