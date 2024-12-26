<?php

namespace App\Middleware;

class Middleware extends MiddlewareManager
{
    /**
     * @var array|string[]
     */
    protected array $middlewares = [
        'init'
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
