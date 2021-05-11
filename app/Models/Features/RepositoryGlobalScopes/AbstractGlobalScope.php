<?php

namespace App\Models\Features\RepositoryGlobalScopes;

use App\Services\Db;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class GlobalScope
 * @package App\Models\Features\RepositoryGlobalScopes
 */
abstract class AbstractGlobalScope
{
    /**
     * @return mixed
     */
    abstract function userId(): mixed;

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
            if(method_exists($this,$scope)){
                $this->{$scope}();
            }
        }
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
