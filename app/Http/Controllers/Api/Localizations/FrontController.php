<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Localizations;

use App\Client\Localizations\Front\Create\CreateClient;
use App\Client\Localizations\Front\Get\GetClient;
use App\Client\Localizations\Front\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsFrontRepositoryContract;

class FrontController extends ApiController
{
    /**
     * get front data
     *
     * @param GetClient $client
     * @param LocalizationsFrontRepositoryContract $frontRepository
     * @return array
     */
    public function get(GetClient $client, LocalizationsFrontRepositoryContract $frontRepository): array
    {
        $client->handle();
        return $frontRepository->get();
    }


    /**
     * create front data
     *
     * @param CreateClient $client
     * @param LocalizationsFrontRepositoryContract $frontRepository
     * @return array|object
     */
    public function create(CreateClient $client, LocalizationsFrontRepositoryContract $frontRepository): array|object
    {
        return $this->transaction(function () use ($client, $frontRepository) {
            $client->handle();
            return $frontRepository->create();
        });
    }


    /**
     * update front data
     *
     * @param UpdateClient $client
     * @param LocalizationsFrontRepositoryContract $frontRepository
     * @return array|object
     */
    public function update(UpdateClient $client, LocalizationsFrontRepositoryContract $frontRepository): array|object
    {
        return $this->transaction(function () use ($client, $frontRepository) {
            $client->handle();
            return $frontRepository->update();
        });
    }
}
