<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Logger;

use App\Client\Logger\Logger\Create\CreateClient;
use App\Client\Logger\Logger\Get\GetClient;
use App\Client\Logger\Logger\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;

class LoggerController extends ApiController
{
    /**
     * get logger data
     *
     * @param GetClient $client
     * @param LoggerRepositoryContract $loggerRepository
     * @return array
     */
    public function get(GetClient $client, LoggerRepositoryContract $loggerRepository): array
    {
        $client->handle();

        return $loggerRepository->get();
    }


    /**
     * create logger data
     *
     * @param CreateClient $client
     * @param LoggerRepositoryContract $loggerRepository
     * @return array|object
     */
    public function create(CreateClient $client, LoggerRepositoryContract $loggerRepository): array|object
    {
        $client->handle();

        return $loggerRepository->create();
    }


    /**
     * update logger data
     *
     * @param UpdateClient $client
     * @param LoggerRepositoryContract $loggerRepository
     * @return array|object
     */
    public function update(UpdateClient $client, LoggerRepositoryContract $loggerRepository): array|object
    {
        $client->handle();

        return $loggerRepository->update();
    }
}
