<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Facades\Authenticate\ApiKey;

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
}
