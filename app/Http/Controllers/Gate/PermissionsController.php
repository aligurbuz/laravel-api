<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Gate;

use App\Client\Gate\Permissions\Create\CreateClient;
use App\Client\Gate\Permissions\Get\GetClient;
use App\Client\Gate\Permissions\Update\UpdateClient;
use App\Http\Controllers\ApiController;
use App\Repositories\Gate\Contracts\PermissionsRepositoryContract;

class PermissionsController extends ApiController
{
	/**
	 * get permissions data
	 *
	 * @param GetClient $client
	 * @param PermissionsRepositoryContract $permissionsRepository
	 * @return array
	 */
	public function get(GetClient $client, PermissionsRepositoryContract $permissionsRepository): array
	{
		$client->handle();
		return $permissionsRepository->get();
	}


	/**
	 * create permissions data
	 *
	 * @param CreateClient $client
	 * @param PermissionsRepositoryContract $permissionsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, PermissionsRepositoryContract $permissionsRepository): array|object
	{
		return $this->transaction(function() use($client,$permissionsRepository) {
		    $client->handle();
		    return $permissionsRepository->create();
		});
	}


	/**
	 * update permissions data
	 *
	 * @param UpdateClient $client
	 * @param PermissionsRepositoryContract $permissionsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, PermissionsRepositoryContract $permissionsRepository): array|object
	{
		return $this->transaction(function() use($client,$permissionsRepository) {
		    $client->handle();
		    return $permissionsRepository->update();
		});
	}
}
