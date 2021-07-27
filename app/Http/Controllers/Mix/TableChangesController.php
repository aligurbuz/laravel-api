<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Mix;

use App\Client\Mix\TableChanges\Create\CreateClient;
use App\Client\Mix\TableChanges\Get\GetClient;
use App\Client\Mix\TableChanges\Update\UpdateClient;
use App\Http\Controllers\ApiController;
use App\Repositories\Mix\Contracts\TableChangesRepositoryContract;

class TableChangesController extends ApiController
{
	/**
	 * get tableChanges data
	 *
	 * @param GetClient $client
	 * @param TableChangesRepositoryContract $tableChangesRepository
	 * @return array
	 */
	public function get(GetClient $client, TableChangesRepositoryContract $tableChangesRepository): array
	{
		$client->handle();
		return $tableChangesRepository->get();
	}


	/**
	 * create tableChanges data
	 *
	 * @param CreateClient $client
	 * @param TableChangesRepositoryContract $tableChangesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, TableChangesRepositoryContract $tableChangesRepository): array|object
	{
		return $this->transaction(function() use($client,$tableChangesRepository) {
		    $client->handle();
		    return $tableChangesRepository->create();
		});
	}


	/**
	 * update tableChanges data
	 *
	 * @param UpdateClient $client
	 * @param TableChangesRepositoryContract $tableChangesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, TableChangesRepositoryContract $tableChangesRepository): array|object
	{
		return $this->transaction(function() use($client,$tableChangesRepository) {
		    $client->handle();
		    return $tableChangesRepository->update();
		});
	}
}
