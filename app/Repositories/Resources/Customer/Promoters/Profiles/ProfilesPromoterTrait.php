<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Profiles;

use App\Libs\Client;
use App\Models\Entities\Customer;
use App\Repositories\EloquentRepository;
use Exception;

trait ProfilesPromoterTrait
{
    /**
     * get auto ProfilesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function profilesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get append values for repository
     *
     * @return array
     */
    public function appends(): array
    {
        return [];
    }

    /**
     * get entity for repository
     *
     * @return Customer
     */
    public function entity(): Customer
    {
        return parent::entity();
    }

    /**
     * @return void
     */
    public function gender(): void
    {
        $queryAdd = [
            'with' => [
                'customerGenders' => [
                    'select' => '*',
                    'with' => [
                        'gender' => [
                            'select' => 'name'
                        ]
                    ]
                ]
            ]
        ];

        Client::mergeQuery($queryAdd);
    }

    /**
     * the range value getting only male customers.
     *
     * @return EloquentRepository
     */
    public function male(): EloquentRepository
    {
        return $this->sourceFilter('customerGender', 'gender', __FUNCTION__);
    }

    /**
     * the range value getting only female customers.
     *
     * @return EloquentRepository
     */
    public function female(): EloquentRepository
    {
        return $this->sourceFilter('customerGender', 'gender', __FUNCTION__);
    }

    /**
     * @param Exception $exception
     * @return void
     */
    public function createFailed(Exception $exception): void
    {
        //
    }

    /**
     * @return void
     */
    public function updateFailed(): void
    {
        //
    }
}
