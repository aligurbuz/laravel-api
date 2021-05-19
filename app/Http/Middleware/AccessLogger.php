<?php

namespace App\Http\Middleware;

use Closure;
use App\Factory\Factory;
use Illuminate\Http\Request;
use App\Services\AppContainer;
use App\Facades\Authenticate\ApiKey;
use Illuminate\Support\Facades\Route;

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

        if($this->isRouteLogger()) return $response;

        $standardResponse = AppContainer::get('response',[]);
        $responseContent = $this->response500Different($standardResponse);

        $this->createLogger($request,$responseContent);

        return $response;
    }

    /**
     * create data to logger table
     *
     * @param $request
     * @param $responseContent
     * @return object
     */
    private function createLogger($request,$responseContent) : object
    {
        return Factory::logger()->make([
            'client_key'                => ApiKey::who(),
            'endpoint_name'             => $request->url(),
            'response_code'             => $responseContent['responseCode'] ?? 0,
            'http_method'               => $method = $request->method(),
            'http_client_headers'       => json_encode($request->header()),
            'http_client_params_data'   => json_encode($request->query->all()),
            'http_client_body_data'     => ($method!=='GET') ? json_encode($request->request->all()) : json_encode([]),
            'response_status'           => $responseContent['code'] ?? 0,
            'exception_file'            => $responseContent['file'] ?? '',
            'exception_line'            => $responseContent['line'] ?? '',
            'exception_message'         => $responseContent['errorMessage'] ?? '',
            'exception_trace'           => json_encode($this->containerDebugBackTrace()),
            'response'                  => json_encode($responseContent)
        ],$responseContent);
    }

    /**
     * get response 500 different
     *
     * @param array $responseContent
     * @return array
     */
    private function response500Different(array $responseContent = []): array
    {
        if(isset($responseContent['code']) && $responseContent['code'] == 500){
            $responseContent['file']         = AppContainer::get('500fileForLog');
            $responseContent['line']         = AppContainer::get('500lineForLog');
            $responseContent['errorMessage'] = AppContainer::get('500messageForLog');
        }

        return $responseContent;
    }

    /**
     * is route logger
     *
     * @return bool
     */
    private function isRouteLogger() : bool
    {
        $controller = Route::getCurrentRoute()->getAction('controller');
        $controllerSplit = explode('@',$controller);

        if(isset($controllerSplit[0]) && $controllerSplit[0] =='App\Http\Controllers\Logger\LoggerController'){
            return true;
        }

        return false;
    }

    /**
     * get container debugBackTrace
     *
     * @return mixed
     */
    private function containerDebugBackTrace(): mixed
    {
        return AppContainer::get('debugBackTrace',[]);
    }
}
