<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\Items\Create\CreateClient;
use App\Client\Store\Items\Get\GetClient;
use App\Client\Store\Items\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreItemsRepositoryContract;

class ItemsController extends ApiController
{
	/**
	 * get items data
	 *
	 * @param GetClient $client
	 * @param StoreItemsRepositoryContract $itemsRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreItemsRepositoryContract $itemsRepository): array
	{
		$client->handle();
		return $itemsRepository->get();
	}


	/**
	 * create items data
	 *
	 * @param CreateClient $client
	 * @param StoreItemsRepositoryContract $itemsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, StoreItemsRepositoryContract $itemsRepository): array|object
	{
		return $this->transaction(function() use($client,$itemsRepository) {
		    $client->handle();
		    return $itemsRepository->create();
		});
	}


	/**
	 * update items data
	 *
	 * @param UpdateClient $client
	 * @param StoreItemsRepositoryContract $itemsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, StoreItemsRepositoryContract $itemsRepository): array|object
	{
		return $this->transaction(function() use($client,$itemsRepository) {
		    $client->handle();
		    return $itemsRepository->update();
		});
	}
}
