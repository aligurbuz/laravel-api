<?php

namespace App\Services;

use Closure;
use App\Exceptions\Exception;
use Illuminate\Http\Request;

class ApiKeyManager
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
        $apiKeys = $this->apiKeys();
        $header = $this->getHeaderKey($request);

        AppContainer::set('apiKey',$header);
        AppContainer::set('apiKeys',$apiKeys);

        if(!in_array($header,$apiKeys)){
            return Exception::apiKeyException();
        }

        return $next($request);
    }

    /**
     * @return array
     */
    private function apiKeys(): array
    {
        return $this->apiKeys;
    }

    /**
     * @param Request $request
     * @return null|string
     */
    private function getHeaderKey(Request $request): ?string
    {
        return $request->headers->get(config('app.apikeyString'));
    }
}
