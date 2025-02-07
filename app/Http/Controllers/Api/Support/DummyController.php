<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Support;

use App\Client\Support\Dummy\Create\CreateClient;
use App\Client\Support\Dummy\Get\GetClient;
use App\Client\Support\Dummy\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Support\Contracts\SupportDummyRepositoryContract;

class DummyController extends ApiController
{
    /**
     * get dummy data
     *
     * @param GetClient $client
     * @param SupportDummyRepositoryContract $dummyRepository
     * @return array
     */
    public function get(GetClient $client, SupportDummyRepositoryContract $dummyRepository): array
    {
        $client->handle();
        return $dummyRepository->get();
    }


    /**
     * create dummy data
     *
     * @param CreateClient $client
     * @param SupportDummyRepositoryContract $dummyRepository
     * @return array|object
     */
    public function create(CreateClient $client, SupportDummyRepositoryContract $dummyRepository): array|object
    {
        return $this->transaction(function () use ($client, $dummyRepository) {
            $client->handle();
            return $dummyRepository->create();
        });
    }


    /**
     * update dummy data
     *
     * @param UpdateClient $client
     * @param SupportDummyRepositoryContract $dummyRepository
     * @return array|object
     */
    public function update(UpdateClient $client, SupportDummyRepositoryContract $dummyRepository): array|object
    {
        return $this->transaction(function () use ($client, $dummyRepository) {
            $client->handle();
            return $dummyRepository->update();
        });
    }
}
