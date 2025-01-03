<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Client\User\Password\Create\CreateClient;
use App\Client\User\Password\Get\GetClient;
use App\Client\User\Password\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\User\Contracts\UserPasswordRepositoryContract;

class PasswordController extends ApiController
{
	/**
	 * get password data
	 *
	 * @param GetClient $client
	 * @param UserPasswordRepositoryContract $passwordRepository
	 * @return array
	 */
	public function get(GetClient $client, UserPasswordRepositoryContract $passwordRepository): array
	{
		$client->handle();
		return $passwordRepository->get();
	}


	/**
	 * create password data
	 *
	 * @param CreateClient $client
	 * @param UserPasswordRepositoryContract $passwordRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, UserPasswordRepositoryContract $passwordRepository): array|object
	{
		return $this->transaction(function() use($client,$passwordRepository) {
		    $client->handle();
		    return $passwordRepository->create();
		});
	}


	/**
	 * update password data
	 *
	 * @param UpdateClient $client
	 * @param UserPasswordRepositoryContract $passwordRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, UserPasswordRepositoryContract $passwordRepository): array|object
	{
		return $this->transaction(function() use($client,$passwordRepository) {
		    $client->handle();
		    return $passwordRepository->update();
		});
	}
}
