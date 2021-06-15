<?php

namespace App\Http\Middleware;

use App\Exceptions\Exception;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  $request
     * @return void
     */
    protected function redirectTo($request): void
    {
        if (!$request->expectsJson()) {
            Exception::authenticateException();
        }
    }
}
