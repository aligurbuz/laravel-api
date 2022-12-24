<?php

namespace App\Http\Middleware;

use App\Exceptions\Exception;
use App\Facades\Authenticate\User;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string[] ...$guards
     * @return mixed
     *
     * @throws AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards): mixed
    {
        if (config('app.authenticate') === true) {
            $this->authenticate($request, $guards);
        }

        // this code looks at the user's status and is_deleted fields.
        // It will throw an exception if the status field value is 0 or the is_deleted field is 1.
        User::isActive();

        return $next($request);
    }

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
