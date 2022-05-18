<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Currencies;

use App\Client\Currencies\Currencies\Create\CreateClient;
use App\Client\Currencies\Currencies\Get\GetClient;
use App\Client\Currencies\Currencies\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;

class CurrenciesController extends ApiController
{
    /**
     * get currencies data
     *
     * @param GetClient $client
     * @param CurrenciesRepositoryContract $currenciesRepository
     * @return array
     */
    public function get(GetClient $client, CurrenciesRepositoryContract $currenciesRepository): array
    {
        $client->handle();
        return $currenciesRepository->get();
    }


    /**
     * create currencies data
     *
     * @param CreateClient $client
     * @param CurrenciesRepositoryContract $currenciesRepository
     * @return array|object
     */
    public function create(CreateClient $client, CurrenciesRepositoryContract $currenciesRepository): array|object
    {
        return $this->transaction(function () use ($client, $currenciesRepository) {
            $client->handle();
            return $currenciesRepository->create();
        });
    }


    /**
     * update currencies data
     *
     * @param UpdateClient $client
     * @param CurrenciesRepositoryContract $currenciesRepository
     * @return array|object
     */
    public function update(UpdateClient $client, CurrenciesRepositoryContract $currenciesRepository): array|object
    {
        return $this->transaction(function () use ($client, $currenciesRepository) {
            $client->handle();
            return $currenciesRepository->update();
        });
    }
}
