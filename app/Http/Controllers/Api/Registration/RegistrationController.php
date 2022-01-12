<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Registration;

use App\Client\Registration\Registration\Create\CreateClient;
use App\Client\Registration\Registration\Get\GetClient;
use App\Client\Registration\Registration\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;

class RegistrationController extends ApiController
{
    /**
     * @var bool
     */
    protected bool $authenticate = false;

	/**
	 * get registration data
	 *
	 * @param GetClient $client
	 * @param RegistrationRepositoryContract $registrationRepository
	 * @return array
	 */
	public function get(GetClient $client, RegistrationRepositoryContract $registrationRepository): array
	{
		$client->handle();
		return $registrationRepository->get();
	}


	/**
	 * create registration data
	 *
	 * @param CreateClient $client
	 * @param RegistrationRepositoryContract $registrationRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, RegistrationRepositoryContract $registrationRepository): array|object
	{
		return $this->transaction(function() use($client,$registrationRepository) {
		    $client->handle();
		    return $registrationRepository->create();
		});
	}


	/**
	 * update registration data
	 *
	 * @param UpdateClient $client
	 * @param RegistrationRepositoryContract $registrationRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, RegistrationRepositoryContract $registrationRepository): array|object
	{
		return $this->transaction(function() use($client,$registrationRepository) {
		    $client->handle();
		    return $registrationRepository->update();
		});
	}
}
