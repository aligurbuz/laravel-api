<?php

namespace App\Http\Middleware;

use App\Exceptions\Exception;
use App\Models\AccessLogger as Logger;
use Closure;
use Illuminate\Http\Request;
use App\Facades\Authenticate\ApiKey;

class AccessLogger
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $response = $next($request);

        $responseContent = json_decode($content = $response->getContent(),1);

        try {
            Logger::create([
                'client_key'                => ApiKey::who(),
                'endpoint_name'             => $request->url(),
                'response_code'             => $responseContent['responseCode'] ?? 0,
                'http_method'               => $method = $request->method(),
                'http_client_headers'       => json_encode($request->header()),
                'http_client_params_data'   => json_encode($request->query->all()),
                'http_client_body_data'     => json_encode($request->request->all()),
                'response_status'           => $responseContent['code'] ?? 0,
                'exception_file'            => $responseContent['file'] ?? '',
                'exception_line'            => $responseContent['line'] ?? '',
                'exception_message'         => $responseContent['errorMessage'] ?? '',
                'exception_trace'           => json_encode([]),
                'response'                  => $content
            ]);
        }
        catch (\Exception $e){
            return Exception::accessLoggerException($e->getMessage());
        }

        return $response;
    }
}
