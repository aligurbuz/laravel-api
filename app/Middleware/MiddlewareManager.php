<?php

namespace App\Middleware;

abstract class MiddlewareManager
{
    /**
     * @var array|string[]
     */
    protected array $except = [
        'login',
        'logout',
        'verifying',
        'registration'
    ];

    /**
     * @return void
     */
    public function handle(): void
    {
        $endpoint = endpoint();

        foreach ($this->middlewares as $middleware) {
            if (!in_array($endpoint, $this->except, true)) {
                if (method_exists($this, $middleware)) {
                    $except = $middleware.'Except';
                    if(property_exists($this,$except) && in_array($endpoint, $this->$except, true)){
                        continue;
                    }

                    $this->$middleware($endpoint);
                }
            }
        }
    }
}
