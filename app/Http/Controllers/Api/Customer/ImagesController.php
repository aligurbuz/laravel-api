<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Images\Create\CreateClient;
use App\Client\Customer\Images\Get\GetClient;
use App\Client\Customer\Images\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerImagesRepositoryContract;

class ImagesController extends ApiController
{
	/**
	 * get images data
	 *
	 * @param GetClient $client
	 * @param CustomerImagesRepositoryContract $imagesRepository
	 * @return array
	 */
	public function get(GetClient $client, CustomerImagesRepositoryContract $imagesRepository): array
	{
		$client->handle();
		return $imagesRepository->get();
	}


	/**
	 * create images data
	 *
	 * @param CreateClient $client
	 * @param CustomerImagesRepositoryContract $imagesRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CustomerImagesRepositoryContract $imagesRepository): array|object
	{
		return $this->transaction(function() use($client,$imagesRepository) {
		    $client->handle();
		    return $imagesRepository->create();
		});
	}


	/**
	 * update images data
	 *
	 * @param UpdateClient $client
	 * @param CustomerImagesRepositoryContract $imagesRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CustomerImagesRepositoryContract $imagesRepository): array|object
	{
		return $this->transaction(function() use($client,$imagesRepository) {
		    $client->handle();
		    return $imagesRepository->update();
		});
	}
}
