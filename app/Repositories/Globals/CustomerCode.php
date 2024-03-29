<?php

declare(strict_types=1);

namespace App\Repositories\Globals;

use App\Repositories\EloquentRepository;
use App\Repositories\Supporters\GlobalSupporter;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class UserId
 * @package App\Repositories
 */
class CustomerCode extends GlobalSupporter
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
     * @return object
     */
    public function handle(): object
    {
        return $this->builder;
    }

    /**
     * handler for global scope process
     *
     * @param string $column
     * @return object
     */
    public function web(string $column): object
    {
        return $this->builder->where($column, customerCode());
    }
}

