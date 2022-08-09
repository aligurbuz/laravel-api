<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Genders\Create\CreateClient;
use App\Client\Customer\Genders\Get\GetClient;
use App\Client\Customer\Genders\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerGendersRepositoryContract;

class GendersController extends ApiController
{
	/**
	 * get genders data
	 *
	 * @param GetClient $client
	 * @param CustomerGendersRepositoryContract $gendersRepository
	 * @return array
	 */
	public function get(GetClient $client, CustomerGendersRepositoryContract $gendersRepository): array
	{
		$client->handle();
		return $gendersRepository->get();
	}


	/**
	 * create genders data
	 *
	 * @param CreateClient $client
	 * @param CustomerGendersRepositoryContract $gendersRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CustomerGendersRepositoryContract $gendersRepository): array|object
	{
		return $this->transaction(function() use($client,$gendersRepository) {
		    $client->handle();
		    return $gendersRepository->create();
		});
	}


	/**
	 * update genders data
	 *
	 * @param UpdateClient $client
	 * @param CustomerGendersRepositoryContract $gendersRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CustomerGendersRepositoryContract $gendersRepository): array|object
	{
		return $this->transaction(function() use($client,$gendersRepository) {
		    $client->handle();
		    return $gendersRepository->update();
		});
	}
}
