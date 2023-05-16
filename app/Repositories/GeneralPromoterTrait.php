<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Facades\Authenticate\ApiKey;
use App\Facades\Authenticate\Authenticate;
use App\Facades\Role\Role;
use App\Services\Client;
use Illuminate\Database\Eloquent\Builder;

trait GeneralPromoterTrait
{
    use FakerRepository;

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
     * get global appends for repository
     *
     * @return array
     */
    public function globalAppends() : array
    {
        $list['accessible'] = Role::permission()->get();

        return $list;
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

    /**
     * It filters by inverse modeling.
     *
     * @param string $model
     * @param string $field
     * @param string $value
     * @param Builder|null $builder
     * @return EloquentRepository
     */
    public function sourceFilter(string $model, string $field, string $value, Builder $builder = null): EloquentRepository
    {
        Client::setFilter($field, $value);

        $this->repository = $this->setModel($model, true)->builder($builder);

        return $this;
    }
}
