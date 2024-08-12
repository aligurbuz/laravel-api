<?php

declare(strict_types=1);

namespace App\Repositories\Globals;

use App\Facades\Database\Authenticate\Authenticate;
use App\Repositories\EloquentRepository;
use App\Repositories\Supporters\GlobalSupporter;
use Illuminate\Database\Eloquent\Builder;

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
        if ($this->accessible()) {
            return $this->builder;
        }

        return $this->builder->where($column, Authenticate::code());
    }
}

