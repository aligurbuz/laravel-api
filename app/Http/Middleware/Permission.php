<?php

namespace App\Http\Middleware;

use App\Exceptions\Exception;
use App\Facades\Permission\Permission as PermissionFacade;
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
        if ($this->permissionCondition()) {
            return Exception::permissionException('', endpoint());
        }

        return $next($request);
    }

    /**
     * get permission condition for middleware
     *
     * @return bool
     */
    private function permissionCondition() : bool
    {
        return (
            config('app.permission') === true
            && in_array(who(), $this->apiKeys, true)
            && !PermissionFacade::handle()
        );
    }
}
