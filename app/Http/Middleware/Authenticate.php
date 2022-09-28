<?php

namespace App\Http\Middleware;

use App\Exceptions\Exception;
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
    public function handle($request, Closure $next, ...$guards)
    {
        if (config('app.authenticate') === true) {
            $this->authenticate($request, $guards);
        }

        $user = auth()->user();

        if(!$user->status || $user->is_deleted){
            Exception::authenticateException();
        }

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
