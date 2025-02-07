<?php

namespace App\Http\Middleware;

use App\Middleware\Middleware;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GeneralMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(Request): (\Illuminate\Http\Response|RedirectResponse) $next
     * @return \Illuminate\Http\Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        (new Middleware())->handle();

        return $next($request);
    }
}
