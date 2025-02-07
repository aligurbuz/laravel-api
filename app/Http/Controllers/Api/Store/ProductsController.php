<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Store;

use App\Client\Store\Products\Create\CreateClient;
use App\Client\Store\Products\Get\GetClient;
use App\Client\Store\Products\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Store\Contracts\StoreProductsRepositoryContract;

class ProductsController extends ApiController
{
	/**
	 * get products data
	 *
	 * @param GetClient $client
	 * @param StoreProductsRepositoryContract $productsRepository
	 * @return array
	 */
	public function get(GetClient $client, StoreProductsRepositoryContract $productsRepository): array
	{
		$client->handle();
		return $productsRepository->get();
	}


	/**
	 * create products data
	 *
	 * @param CreateClient $client
	 * @param StoreProductsRepositoryContract $productsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, StoreProductsRepositoryContract $productsRepository): array|object
	{
		return $this->transaction(function() use($client,$productsRepository) {
		    $client->handle();
		    return $productsRepository->create();
		});
	}


	/**
	 * update products data
	 *
	 * @param UpdateClient $client
	 * @param StoreProductsRepositoryContract $productsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, StoreProductsRepositoryContract $productsRepository): array|object
	{
		return $this->transaction(function() use($client,$productsRepository) {
		    $client->handle();
		    return $productsRepository->update();
		});
	}
}
