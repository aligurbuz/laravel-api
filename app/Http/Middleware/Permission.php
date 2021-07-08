<?php

namespace App\Http\Middleware;

use Closure;
use App\Factory\Factory;
use App\Exceptions\Exception;
use Illuminate\Http\Request;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if(!Factory::permission()->checkEndpoint()){
            return Exception::permissionException();
        }

        return $next($request);
    }
}
