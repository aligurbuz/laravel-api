<?php

namespace App\Http\Middleware;

use App\Libs\Http\Http;
use Closure;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use JsonException;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $userRequest = Http::get('user', ['range' => 'me']);
        } catch (ConnectionException|JsonException) {
            return redirect()->route('admin.get.login');
        }

        if (!$userRequest['status']) {
            return redirect()->route('admin.get.login');
        }

        return $next($request);
    }
}
