<?php

namespace App\Http\Middleware;

use App\Services\Response\Response as ResponseFormatter;
use Closure;
use Exception;
use Illuminate\Http\Request;

class Response
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     *
     * @throws Exception
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $response = $next($request);
        $content = json_decode($response->getContent(), 1, 512, JSON_THROW_ON_ERROR);

        if (isset($content['status']) && $content['status'] === false) {
            return $response;
        }

        return ResponseFormatter::ok(
            $content,
            200,
            (
                (isset($content['data']) && is_array($content['data']) && count($content['data']))
                || (!isset($content['data']) && count($content))
            )
        );
    }
}
