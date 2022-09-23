<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Ages\Create\CreateClient;
use App\Client\Customer\Ages\Get\GetClient;
use App\Client\Customer\Ages\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerAgesRepositoryContract;

class AgesController extends ApiController
{
    /**
     * get ages data
     *
     * @param GetClient $client
     * @param CustomerAgesRepositoryContract $agesRepository
     * @return array
     */
    public function get(GetClient $client, CustomerAgesRepositoryContract $agesRepository): array
    {
        $client->handle();
        return $agesRepository->get();
    }


    /**
     * create ages data
     *
     * @param CreateClient $client
     * @param CustomerAgesRepositoryContract $agesRepository
     * @return array|object
     */
    public function create(CreateClient $client, CustomerAgesRepositoryContract $agesRepository): array|object
    {
        return $this->transaction(function () use ($client, $agesRepository) {
            $client->handle();
            return $agesRepository->create();
        });
    }


    /**
     * update ages data
     *
     * @param UpdateClient $client
     * @param CustomerAgesRepositoryContract $agesRepository
     * @return array|object
     */
    public function update(UpdateClient $client, CustomerAgesRepositoryContract $agesRepository): array|object
    {
        return $this->transaction(function () use ($client, $agesRepository) {
            $client->handle();
            return $agesRepository->update();
        });
    }
}
