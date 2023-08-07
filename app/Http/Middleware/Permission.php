<?php

namespace App\Http\Middleware;

use App\Constants;
use App\Exceptions\Custom\CustomException;
use App\Exceptions\Exception;
use App\Policies\Permission\Permission as PermissionFacade;
use App\Services\AppContainer;
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
     *
     * @throws CustomException
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($this->isPermissionFail()) {
            $httpPermissionMessage = httpMethod().'PermissionException';

            // if the permissionException value has in container,
            // it means that we will give a special exception message.
            if(AppContainer::has($httpPermissionMessage)){
                return throw new CustomException(AppContainer::get($httpPermissionMessage),Constants::error403);
            }

            return Exception::permissionException('', endpoint());
        }

        return $next($request);
    }

    /**
     * get permission condition for middleware
     *
     * @return bool
     */
    private function isPermissionFail() : bool
    {
        $endpoint = endpoint(true);

        return (
            true === config('app.permission')
            && in_array(who(), $this->apiKeys, true)
            && !(new PermissionFacade())->$endpoint()
        );
    }
}
