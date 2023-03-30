<?php

declare(strict_types=1);

namespace App\Repositories\Globals;

use App\Facades\Authenticate\Authenticate;
use App\Facades\Role\Role;
use App\Repositories\EloquentRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\App;

/**
 * Class UserId
 * @package App\Repositories
 */
class UserCode extends GlobalSupporter
{
    /**
     * @var Builder
     */
    protected mixed $builder;

    /**
     * @var EloquentRepository
     */
    protected EloquentRepository $eloquentRepository;

    /**
     * UserId constructor.
     * @param $builder
     * @param EloquentRepository $eloquentRepository
     */
    public function __construct($builder, EloquentRepository $eloquentRepository)
    {
        $this->builder = $builder;
        $this->eloquentRepository = $eloquentRepository;
    }

    /**
     * handler for global scope process
     *
     * @param $column
     * @return object
     */
    public function handle($column): object
    {
        /**
         * !!Pay attention here!!!
         * Role::isAdmin method here should not work in console
         * otherwise your system will go in to an infinite loop.
         * if the user is admin, that must see all users.
         */
        if($this->isAccessible()) {
            return $this->builder;
        }

        return $this->builder->where($column, Authenticate::code());
    }
}

