<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Request;
use App\Exceptions\Exception;

/**
 * Class ApiKeyManager
 * @package App\Services
 */
class ApiKeyManager
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(): mixed
    {
        $request = request();

        $apiKeys = $this->apiKeys();
        $header = $this->getHeaderKey($request);

        if(!in_array($header,$apiKeys)){
            return Exception::apiKeyException();
            AppContainer::set('apiKeyException',true);
        }

        AppContainer::set('apiKey',$header);
        AppContainer::set('apiKeys',$apiKeys);

        return null;
    }

    /**
     * @return array
     */
    private function apiKeys(): array
    {
        return config('apikey');
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
