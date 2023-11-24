<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Password;

use App\Client\Password\Changes\Create\CreateClient;
use App\Client\Password\Changes\Get\GetClient;
use App\Client\Password\Changes\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Password\Contracts\PasswordChangesRepositoryContract;

class ChangesController extends ApiController
{
    /**
     * @var bool
     */
    protected bool $authenticate = false;

    /**
     * get changes data
     *
     * @param GetClient $client
     * @param PasswordChangesRepositoryContract $changesRepository
     * @return array
     */
    public function get(GetClient $client, PasswordChangesRepositoryContract $changesRepository): array
    {
        $client->handle();
        return $changesRepository->get();
    }


    /**
     * create changes data
     *
     * @param CreateClient $client
     * @param PasswordChangesRepositoryContract $changesRepository
     * @return array|object
     */
    public function create(CreateClient $client, PasswordChangesRepositoryContract $changesRepository): array|object
    {
        return $this->transaction(function () use ($client, $changesRepository) {
            $client->handle();
            return $changesRepository->create();
        });
    }


    /**
     * update changes data
     *
     * @param UpdateClient $client
     * @param PasswordChangesRepositoryContract $changesRepository
     * @return array|object
     */
    public function update(UpdateClient $client, PasswordChangesRepositoryContract $changesRepository): array|object
    {
        return $this->transaction(function () use ($client, $changesRepository) {
            $client->handle();
            return $changesRepository->update();
        });
    }
}
