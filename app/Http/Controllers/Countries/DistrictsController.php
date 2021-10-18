<?php

declare(strict_types=1);

namespace App\Http\Controllers\Countries;

use App\Client\Countries\Districts\Create\CreateClient;
use App\Client\Countries\Districts\Get\GetClient;
use App\Client\Countries\Districts\Update\UpdateClient;
use App\Http\Controllers\ApiController;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;

class DistrictsController extends ApiController
{
	/**
	 * get districts data
	 *
	 * @param GetClient $client
	 * @param DistrictsRepositoryContract $districtsRepository
	 * @return array
	 */
	public function get(GetClient $client, DistrictsRepositoryContract $districtsRepository): array
	{
		$client->handle();
		return $districtsRepository->get();
	}


	/**
	 * create districts data
	 *
	 * @param CreateClient $client
	 * @param DistrictsRepositoryContract $districtsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, DistrictsRepositoryContract $districtsRepository): array|object
	{
		return $this->transaction(function() use($client,$districtsRepository) {
		    $client->handle();
		    return $districtsRepository->create();
		});
	}


	/**
	 * update districts data
	 *
	 * @param UpdateClient $client
	 * @param DistrictsRepositoryContract $districtsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, DistrictsRepositoryContract $districtsRepository): array|object
	{
		return $this->transaction(function() use($client,$districtsRepository) {
		    $client->handle();
		    return $districtsRepository->update();
		});
	}
}
