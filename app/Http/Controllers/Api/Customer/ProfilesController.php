<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Profiles\Create\CreateClient;
use App\Client\Customer\Profiles\Get\GetClient;
use App\Client\Customer\Profiles\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerProfilesRepositoryContract;

class ProfilesController extends ApiController
{
	/**
	 * get profiles data
	 *
	 * @param GetClient $client
	 * @param CustomerProfilesRepositoryContract $profilesRepository
	 * @return array
	 */
	public function get(GetClient $client, CustomerProfilesRepositoryContract $profilesRepository): array
	{
		$client->handle();
		return $profilesRepository->get();
	}


	/**
	 * create profiles data
	 *
	 * @param CreateClient $client
	 * @param CustomerProfilesRepositoryContract $profilesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CustomerProfilesRepositoryContract $profilesRepository): array|object
	{
		return $this->transaction(function() use($client,$profilesRepository) {
		    $client->handle();
		    return $profilesRepository->create();
		});
	}


	/**
	 * update profiles data
	 *
	 * @param UpdateClient $client
	 * @param CustomerProfilesRepositoryContract $profilesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CustomerProfilesRepositoryContract $profilesRepository): array|object
	{
		return $this->transaction(function() use($client,$profilesRepository) {
		    $client->handle();
		    return $profilesRepository->update();
		});
	}
}
