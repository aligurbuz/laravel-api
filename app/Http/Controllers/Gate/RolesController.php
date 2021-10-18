<?php

declare(strict_types=1);

namespace App\Http\Controllers\Gate;

use App\Client\Gate\Roles\Create\CreateClient;
use App\Client\Gate\Roles\Get\GetClient;
use App\Client\Gate\Roles\Update\UpdateClient;
use App\Http\Controllers\ApiController;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;

class RolesController extends ApiController
{
	/**
	 * get roles data
	 *
	 * @param GetClient $client
	 * @param RolesRepositoryContract $rolesRepository
	 * @return array
	 */
	public function get(GetClient $client, RolesRepositoryContract $rolesRepository): array
	{
		$client->handle();
		return $rolesRepository->get();
	}


	/**
	 * create roles data
	 *
	 * @param CreateClient $client
	 * @param RolesRepositoryContract $rolesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, RolesRepositoryContract $rolesRepository): array|object
	{
		return $this->transaction(function() use($client,$rolesRepository) {
		    $client->handle();
		    return $rolesRepository->create();
		});
	}


	/**
	 * update roles data
	 *
	 * @param UpdateClient $client
	 * @param RolesRepositoryContract $rolesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, RolesRepositoryContract $rolesRepository): array|object
	{
		return $this->transaction(function() use($client,$rolesRepository) {
		    $client->handle();
		    return $rolesRepository->update();
		});
	}
}
