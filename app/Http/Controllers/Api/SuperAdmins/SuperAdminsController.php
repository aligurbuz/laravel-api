<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\SuperAdmins;

use App\Client\SuperAdmins\SuperAdmins\Create\CreateClient;
use App\Client\SuperAdmins\SuperAdmins\Get\GetClient;
use App\Client\SuperAdmins\SuperAdmins\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;

class SuperAdminsController extends ApiController
{
    /**
     * get superAdmins data
     *
     * @param GetClient $client
     * @param SuperAdminsRepositoryContract $superAdminsRepository
     * @return array
     */
    public function get(GetClient $client, SuperAdminsRepositoryContract $superAdminsRepository): array
    {
        $client->handle();
        return $superAdminsRepository->get();
    }


    /**
     * create superAdmins data
     *
     * @param CreateClient $client
     * @param SuperAdminsRepositoryContract $superAdminsRepository
     * @return array|object
     */
    public function create(CreateClient $client, SuperAdminsRepositoryContract $superAdminsRepository): array|object
    {
        return $this->transaction(function () use ($client, $superAdminsRepository) {
            $client->handle();
            return $superAdminsRepository->create();
        });
    }


    /**
     * update superAdmins data
     *
     * @param UpdateClient $client
     * @param SuperAdminsRepositoryContract $superAdminsRepository
     * @return array|object
     */
    public function update(UpdateClient $client, SuperAdminsRepositoryContract $superAdminsRepository): array|object
    {
        return $this->transaction(function () use ($client, $superAdminsRepository) {
            $client->handle();
            return $superAdminsRepository->update();
        });
    }
}
