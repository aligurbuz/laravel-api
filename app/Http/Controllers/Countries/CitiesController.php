<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Countries;

use App\Client\Countries\Cities\Create\CreateClient;
use App\Client\Countries\Cities\Get\GetClient;
use App\Client\Countries\Cities\Update\UpdateClient;
use App\Http\Controllers\ApiController;
use App\Repositories\Countries\Contracts\CitiesRepositoryContract;

class CitiesController extends ApiController
{
	/**
	 * get cities data
	 *
	 * @param GetClient $client
	 * @param CitiesRepositoryContract $citiesRepository
	 * @return array
	 */
	public function get(GetClient $client, CitiesRepositoryContract $citiesRepository): array
	{
		$client->handle();
		return $citiesRepository->get();
	}


	/**
	 * create cities data
	 *
	 * @param CreateClient $client
	 * @param CitiesRepositoryContract $citiesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CitiesRepositoryContract $citiesRepository): array|object
	{
		return $this->transaction(function() use($client,$citiesRepository) {
		    $client->handle();
		    return $citiesRepository->create();
		});
	}


	/**
	 * update cities data
	 *
	 * @param UpdateClient $client
	 * @param CitiesRepositoryContract $citiesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CitiesRepositoryContract $citiesRepository): array|object
	{
		return $this->transaction(function() use($client,$citiesRepository) {
		    $client->handle();
		    return $citiesRepository->update();
		});
	}
}
