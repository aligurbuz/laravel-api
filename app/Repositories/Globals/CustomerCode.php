<?php

declare(strict_types=1);

namespace App\Repositories\Globals;

use App\Facades\Authenticate\Authenticate;
use App\Repositories\EloquentRepository;
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
        $builder = $this->builder;

        if (!isGet()) {
            $customerCode = $this->eloquentRepository->customerCode();

            if($customerCode>0){
                return $builder->where('customer_code', $customerCode);
            }
        }

        return $builder;
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

