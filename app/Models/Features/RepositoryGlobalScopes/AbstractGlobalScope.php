<?php

namespace App\Models\Features\RepositoryGlobalScopes;

use App\Services\Db;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class GlobalScope
 * @package App\Models\Features\RepositoryGlobalScopes
 */
abstract class AbstractGlobalScope
{
    /**
     * @var string
     */
    protected string $resource = 'App\Models\Features\RepositoryGlobalScopes\Resources';

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
     * makes global scopes for builder
     *
     * @return object
     */
    public function make(): object
    {
        $this->handleScopes();

        return $this->builder;
    }

    /**
     * handle scopes for repository
     *
     * @return void
     */
    private function handleScopes() : void
    {
        foreach ($this->scopes as $scope){
            $this->handler($scope);
        }
    }

    /**
     * puts user id to where clause for model
     *
     * @param $scope
     * @return object
     */
    private function handler($scope): object
    {
        return $this->ensureColumnExists($columnName = Str::snake($scope),function() use($columnName,$scope){
            $resource = $this->resource.'\\'.$scope;
            if(class_exists($resource)){
                return (new $resource($this->builder))->handle($columnName);
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
    protected function ensureColumnExists($function,callable $callback) : object
    {
        return $this->builder = $this->repository->{__FUNCTION__}($function,$this->builder,$callback);
    }
}
