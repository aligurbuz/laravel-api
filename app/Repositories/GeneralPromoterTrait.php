<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Facades\Database\Authenticate\ApiKey;
use App\Facades\Database\Authenticate\Authenticate;
use App\Libs\Client;
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
     * get authenticated user data
     *
     * @param null|Builder $builder
     * @return EloquentRepository
     */
    public function creator(Builder $builder = null): EloquentRepository
    {
        $this->ensureColumnExists('created_by', $builder, function () use($builder) {
            $this->repository = $this->builder($builder)->with('creator');
        });

        return $this;
    }

    /**
     * get authenticated user data
     *
     * @param null|Builder $builder
     * @return EloquentRepository
     */
    public function updator(Builder $builder = null): EloquentRepository
    {
        $this->ensureColumnExists('updated_by', $builder, function () use($builder) {
            $this->repository = $this->builder($builder)->with('updator');
        });

        return $this;
    }

    /**
     * get authenticated user data
     *
     * @param null|Builder $builder
     * @return EloquentRepository
     */
    public function deletor(Builder $builder = null): EloquentRepository
    {
        $this->ensureColumnExists('deleted_by', $builder, function () use($builder) {
            $this->repository = $this->builder($builder)->with('deletor');
        });

        return $this;
    }

    /**
     * get global appends for repository
     *
     * @return array
     */
    public function globalAppends(): array
    {
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
