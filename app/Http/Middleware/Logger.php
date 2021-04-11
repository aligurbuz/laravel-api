<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Logger as LoggerModel;
use Illuminate\Support\Facades\Route;

class Logger
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $responseContent = json_decode($response->getContent(),1);

        LoggerModel::create([
            Route::current()->getAction('controller'),
            $request->path(),
            $method = $request->method(),
            json_encode($request->query()),
            $method==='POST' ? json_encode($request->all()) : json_encode([]),
            $method==='PUT' ? json_encode($request->all()) : json_encode([]),
            json_encode($request->headers->all()),
            $responseContent['code'],
            $responseContent['errorMessage'] ?? '',
            $responseContent['file'] ?? '',
            $responseContent['line'] ?? '',
        ]);

        return $response;
    }
}
