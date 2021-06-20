<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Exceptions\Exception;
use App\Repositories\Repository;
use App\Facades\Authenticate\ApiKey;
use App\Facades\Authenticate\Authenticate;

class SuperAdmin
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
        if(ApiKey::isSuperAdmin()){
            $superAdmin = Repository::superAdmin()->authenticatedUser()->getRepository();

            if(!isset($superAdmin[0]['user_code']) || $superAdmin[0]['user_code'] !== Authenticate::code()){
                return Exception::grandAuthenticateException();
            }
        }

        return $next($request);
    }
}
