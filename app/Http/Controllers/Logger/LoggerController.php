<?php

declare(strict_types=1);

namespace App\Http\Controllers\Logger;

use App\Http\Controllers\Controller;
use App\Client\Logger\Logger\Get\GetClient;
use App\Client\Logger\Logger\Create\CreateClient;
use App\Client\Logger\Logger\Update\UpdateClient;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;

class LoggerController extends Controller
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
		$client->get();

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
		$client->get();

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
		$client->get();

		return $loggerRepository->update();
	}
}
