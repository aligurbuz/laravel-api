<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Facades\Authenticate\ApiKey;
use App\Facades\Authenticate\Authenticate;

trait GeneralPromoterTrait
{
    /**
     * generalPromoterTrait constructor
     */
    public function __construct()
    {
        // defines laravel relationships
        // that cannot be used based on the apikey value.
        $this->setDeniedEagerLoadingsAccordingToApiKey();
    }

    /**
     * set hidden for repository
     *
     * @return string[]
     */
    public function setHidden(): array
    {
        if (!ApiKey::isAdmin()) {
            return [
                'created_by',
                'updated_by',
                'deleted_by',
                'deleted_at'
            ];
        }

        return [];
    }

    /**
     * set denied eager loadings according to apiKey
     *
     * @return void
     */
    private function setDeniedEagerLoadingsAccordingToApiKey(): void
    {
        if (ApiKey::isWeb()) {
            $this->setDeniedEagerLoadings('role');
            $this->setDeniedEagerLoadings('user');
        }
    }

    /**
     * checks if the authenticated user is superAdmin
     *
     * @return bool
     */
    public function isAuthenticateSuper(): bool
    {
        return Authenticate::isSuper(true);
    }

    /**
     * The key to be generated to create the cache.
     *
     * @param string $model
     * @return string
     */
    public function getCacheKey(string $model): string
    {
        return $model . '_' . ApiKey::who();
    }
}
