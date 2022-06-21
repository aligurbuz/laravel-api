<?php

declare(strict_types=1);

namespace App\Repositories\Globals;

use App\Facades\Authenticate\Authenticate;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class UserId
 * @package App\Repositories
 */
class CustomerCode
{
    /**
     * @var Builder
     */
    protected mixed $builder;

    /**
     * UserId constructor.
     * @param $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    /**
     * handler for global scope process
     *
     * @return object
     */
    public function handle(): object
    {
        return $this->builder;
    }

    /**
     * handler for global scope process
     *
     * @param $column
     * @return object
     */
    public function web($column): object
    {
        return $this->builder->where($column, Authenticate::code());
    }
}

