<?php

namespace App\Repositories;

use App\Services\Db;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use App\Facades\Authenticate\Authenticate;

/**
 * Class GlobalScopeManager
 * @package App\Repositories
 */
class GlobalScopeManager
{
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
        $this->userId();

        return $this->builder;
    }

    /**
     * puts user id to where clause for model
     *
     * @return object
     */
    public function userId(): object
    {
        return $this->ensureColumnExists($function = Str::snake(__FUNCTION__),function() use($function){
            return $this->builder->where($function,Authenticate::id());
        });
    }

    /**
     * ensure column exist for repository
     *
     * @param $function
     * @param callable $callback
     * @return object
     */
    private function ensureColumnExists($function,callable $callback) : object
    {
        return $this->builder = $this->repository->{__FUNCTION__}($function,$this->builder,$callback);
    }
}
