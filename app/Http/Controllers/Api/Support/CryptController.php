<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Api\Support;

use App\Client\Support\Crypt\Create\CreateClient;
use App\Client\Support\Crypt\Get\GetClient;
use App\Client\Support\Crypt\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Support\Contracts\SupportCryptRepositoryContract;

class CryptController extends ApiController
{
	/**
	 * get crypt data
	 *
	 * @param GetClient $client
	 * @param SupportCryptRepositoryContract $cryptRepository
	 * @return array
	 */
	public function get(GetClient $client, SupportCryptRepositoryContract $cryptRepository): array
	{
		$client->handle();
		return $cryptRepository->get();
	}


	/**
	 * create crypt data
	 *
	 * @param CreateClient $client
	 * @param SupportCryptRepositoryContract $cryptRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, SupportCryptRepositoryContract $cryptRepository): array|object
	{
		return $this->transaction(function() use($client,$cryptRepository) {
		    $client->handle();
		    return $cryptRepository->create();
		});
	}


	/**
	 * update crypt data
	 *
	 * @param UpdateClient $client
	 * @param SupportCryptRepositoryContract $cryptRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, SupportCryptRepositoryContract $cryptRepository): array|object
	{
		return $this->transaction(function() use($client,$cryptRepository) {
		    $client->handle();
		    return $cryptRepository->update();
		});
	}
}
