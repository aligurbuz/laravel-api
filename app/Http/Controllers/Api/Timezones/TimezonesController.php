<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Timezones;

use App\Client\Timezones\Timezones\Create\CreateClient;
use App\Client\Timezones\Timezones\Get\GetClient;
use App\Client\Timezones\Timezones\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;

class TimezonesController extends ApiController
{
	/**
	 * get timezones data
	 *
	 * @param GetClient $client
	 * @param TimezonesRepositoryContract $timezonesRepository
	 * @return array
	 */
	public function get(GetClient $client, TimezonesRepositoryContract $timezonesRepository): array
	{
		$client->handle();
		return $timezonesRepository->get();
	}


	/**
	 * create timezones data
	 *
	 * @param CreateClient $client
	 * @param TimezonesRepositoryContract $timezonesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, TimezonesRepositoryContract $timezonesRepository): array|object
	{
		return $this->transaction(function() use($client,$timezonesRepository) {
		    $client->handle();
		    return $timezonesRepository->create();
		});
	}


	/**
	 * update timezones data
	 *
	 * @param UpdateClient $client
	 * @param TimezonesRepositoryContract $timezonesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, TimezonesRepositoryContract $timezonesRepository): array|object
	{
		return $this->transaction(function() use($client,$timezonesRepository) {
		    $client->handle();
		    return $timezonesRepository->update();
		});
	}
}
