<?php

namespace App\Http\Middleware;

use App\Exceptions\Exception;
use App\Factory\Factory;
use Closure;
use Illuminate\Http\Request;

class Permission
{
    /**
     * @var array|string[]
     */
    protected array $apiKeys = ['admin'];

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (config('app.permission') === true && in_array(who(), $this->apiKeys, true)) {
            if (!Factory::permission()->checkEndpoint()) {
                return Exception::permissionException('', endpoint());
            }
        }

        return $next($request);
    }
}
