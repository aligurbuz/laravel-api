<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Facades\Database\Authenticate\ApiKey;
use App\Libs\AppContainer;
use App\Libs\Db;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

/**
 * Class GlobalScopeManager
 * @package App\Models\Features
 */
class GlobalScopeManager
{
    /**
     * @var string
     */
    protected string $resource = 'App\Repositories\Globals';

    /**
     * @var object
     */
    protected object $repository;

    /**
     * @var Builder
     */
    protected mixed $builder;

    /**
     * @var array
     */
    protected array $columns = [];

    /**
     * GlobalScopeManager constructor.
     * @param $repository
     */
    public function __construct($repository)
    {
        $this->repository = $repository;

        $model = $this->repository->getModel();
        $builderInstance = (new $model);

        $this->columns = Db::columns($builderInstance->getTable());
        $this->builder = $builderInstance;
    }

    /**
     * @param ?object $builder
     * @return $this
     */
    public function setBuilder(?object $builder = null): GlobalScopeManager
    {
        $this->builder = $builder ?? $this->builder;

        return $this;
    }

    /**
     * makes global scopes for builder
     *
     * @return object
     */
    public function make(): object
    {
        if (true === AppContainer::get('globalScope', true)) {
            $this->handleScopes();
        }

        return $this->builder;
    }

    /**
     * handle scopes for repository
     *
     * @return void
     */
    private function handleScopes(): void
    {
        foreach (config('repository.globalScopes') as $scope) {

            // the clientKey values in the dontRepository key
            // in the config settings will disable the repository application.
            if (!in_array(ApiKey::who(), config('repository.dontGlobalScopes'))) {
                $this->handler($scope);
            }
        }
    }

    /**
     * puts user id to where clause for model
     *
     * @param $scope
     * @return void
     */
    private function handler($scope): void
    {
        $this->ensureColumnExists($columnName = Str::snake($scope), function () use ($columnName, $scope) {
            $resource = $this->resource . '\\' . ucfirst($scope);

            if (class_exists($resource) && consoleAuthorizationStatus()) {
                $resourceInstance = (new $resource($this->builder, $this->repository));

                return (method_exists($resourceInstance, $camelCaseMethod = Str::camel(who())))
                    ? $resourceInstance->{$camelCaseMethod}($columnName)
                    : $resourceInstance->handle($columnName);
            }

            return $this->builder;
        });
    }

    /**
     * ensure column exist for repository
     *
     * @param $function
     * @param callable $callback
     * @return object
     */
    protected function ensureColumnExists($function, callable $callback): object
    {
        return $this->builder = $this->repository->{__FUNCTION__}($function, $this->builder, $callback);
    }
}

