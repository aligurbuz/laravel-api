<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Client\User\Activations\Create\CreateClient;
use App\Client\User\Activations\Get\GetClient;
use App\Client\User\Activations\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\User\Contracts\UserActivationsRepositoryContract;

class ActivationsController extends ApiController
{
    /**
     * get activations data
     *
     * @param GetClient $client
     * @param UserActivationsRepositoryContract $activationsRepository
     * @return array
     */
    public function get(GetClient $client, UserActivationsRepositoryContract $activationsRepository): array
    {
        $client->handle();
        return $activationsRepository->get();
    }


    /**
     * create activations data
     *
     * @param CreateClient $client
     * @param UserActivationsRepositoryContract $activationsRepository
     * @return array|object
     */
    public function create(CreateClient $client, UserActivationsRepositoryContract $activationsRepository): array|object
    {
        return $this->transaction(function () use ($client, $activationsRepository) {
            $client->handle();
            return $activationsRepository->create();
        });
    }


    /**
     * update activations data
     *
     * @param UpdateClient $client
     * @param UserActivationsRepositoryContract $activationsRepository
     * @return array|object
     */
    public function update(UpdateClient $client, UserActivationsRepositoryContract $activationsRepository): array|object
    {
        return $this->transaction(function () use ($client, $activationsRepository) {
            $client->handle();
            return $activationsRepository->update();
        });
    }
}
