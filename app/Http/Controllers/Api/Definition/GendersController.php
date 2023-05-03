<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Definition;

use App\Client\Definition\Genders\Create\CreateClient;
use App\Client\Definition\Genders\Get\GetClient;
use App\Client\Definition\Genders\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Definition\Contracts\DefinitionGendersRepositoryContract;

class GendersController extends ApiController
{
	/**
	 * get genders data
	 *
	 * @param GetClient $client
	 * @param DefinitionGendersRepositoryContract $gendersRepository
	 * @return array
	 */
	public function get(GetClient $client, DefinitionGendersRepositoryContract $gendersRepository): array
	{
		$client->handle();
		return $gendersRepository->get();
	}


	/**
	 * create genders data
	 *
	 * @param CreateClient $client
	 * @param DefinitionGendersRepositoryContract $gendersRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, DefinitionGendersRepositoryContract $gendersRepository): array|object
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
	 * @param DefinitionGendersRepositoryContract $gendersRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, DefinitionGendersRepositoryContract $gendersRepository): array|object
	{
		return $this->transaction(function() use($client,$gendersRepository) {
		    $client->handle();
		    return $gendersRepository->update();
		});
	}
}
