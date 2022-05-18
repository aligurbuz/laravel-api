<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Countries;

use App\Client\Countries\Countries\Create\CreateClient;
use App\Client\Countries\Countries\Get\GetClient;
use App\Client\Countries\Countries\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;

class CountriesController extends ApiController
{
    /**
     * @var bool
     */
    protected bool $authenticate = false;

    /**
     * get countries data
     *
     * @param GetClient $client
     * @param CountriesRepositoryContract $countriesRepository
     * @return array
     */
    public function get(GetClient $client, CountriesRepositoryContract $countriesRepository): array
    {
        $client->handle();
        return $countriesRepository->get();
    }


    /**
     * create countries data
     *
     * @param CreateClient $client
     * @param CountriesRepositoryContract $countriesRepository
     * @return array|object
     */
    public function create(CreateClient $client, CountriesRepositoryContract $countriesRepository): array|object
    {
        return $this->transaction(function () use ($client, $countriesRepository) {
            $client->handle();
            return $countriesRepository->create();
        });
    }


    /**
     * update countries data
     *
     * @param UpdateClient $client
     * @param CountriesRepositoryContract $countriesRepository
     * @return array|object
     */
    public function update(UpdateClient $client, CountriesRepositoryContract $countriesRepository): array|object
    {
        return $this->transaction(function () use ($client, $countriesRepository) {
            $client->handle();
            return $countriesRepository->update();
        });
    }
}
