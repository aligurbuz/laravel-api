<?php

declare(strict_types=1);

namespace App\Libs;

use App\Exceptions\Exception;
use Illuminate\Http\Request;

/**
 * Class ApiKeyManager
 * @package App\Services
 */
class ApiKeyManager
{
    /**
     * Handle an incoming request.
     *
     * @return void
     */
    public function handle(): void
    {
        $request = request();

        $apiKeys = $this->apiKeys();
        $header = $this->getHeaderKey($request);

        if (!in_array($header, $apiKeys, true)) {
            Exception::apiKeyException();
        }

        AppContainer::set('apiKey', $header);
        AppContainer::set('apiKeys', $apiKeys);
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
