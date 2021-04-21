<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\Response as ResponseFormatter;

class Response
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) : JsonResponse
    {
        $response = $next($request);
        $content = json_decode($response->getContent(),1);

        if(isset($content['status']) && $content['status']===false){
            return $response;
        }

        return ResponseFormatter::ok($content);
    }
}
