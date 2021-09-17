<?php 

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Client\User\Photos\Create\CreateClient;
use App\Client\User\Photos\Get\GetClient;
use App\Client\User\Photos\Update\UpdateClient;
use App\Http\Controllers\ApiController;
use App\Repositories\User\Contracts\PhotosRepositoryContract;

class PhotosController extends ApiController
{
	/**
	 * get photos data
	 *
	 * @param GetClient $client
	 * @param PhotosRepositoryContract $photosRepository
	 * @return array
	 */
	public function get(GetClient $client, PhotosRepositoryContract $photosRepository): array
	{
		$client->handle();
		return $photosRepository->get();
	}


	/**
	 * create photos data
	 *
	 * @param CreateClient $client
	 * @param PhotosRepositoryContract $photosRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, PhotosRepositoryContract $photosRepository): array|object
	{
		return $this->transaction(function() use($client,$photosRepository) {
		    $client->handle();
		    return $photosRepository->create();
		});
	}


	/**
	 * update photos data
	 *
	 * @param UpdateClient $client
	 * @param PhotosRepositoryContract $photosRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, PhotosRepositoryContract $photosRepository): array|object
	{
		return $this->transaction(function() use($client,$photosRepository) {
		    $client->handle();
		    return $photosRepository->update();
		});
	}
}
