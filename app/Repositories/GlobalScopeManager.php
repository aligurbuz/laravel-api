<?php

namespace App\Repositories;

use App\Services\Db;
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
        return $this->userId();
    }

    /**
     * puts user id to where clause for model
     *
     * @return object
     */
    public function userId(): object
    {
        return $this->repository->ensureColumnExists('user_id',$this->builder,function(){
            return $this->builder->where('user_id',Authenticate::id());
        });
    }
}
