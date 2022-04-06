<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Support;

use App\Client\Support\Excel\Create\CreateClient;
use App\Client\Support\Excel\Get\GetClient;
use App\Client\Support\Excel\Update\UpdateClient;
use App\Factory\Factory;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;

class ExcelController extends ApiController
{
	/**
	 * get excel data
	 *
	 * @param GetClient $client
	 * @param ExcelRepositoryContract $excelRepository
	 * @return array
	 */
	public function get(GetClient $client, ExcelRepositoryContract $excelRepository): array
	{
		$client->handle();
		return $excelRepository->get();
	}


	/**
	 * create excel data
	 *
	 * @param CreateClient $client
	 * @param ExcelRepositoryContract $excelRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, ExcelRepositoryContract $excelRepository): array|object
	{
		return $this->transaction(function() use($client,$excelRepository) {
		    $client->handle();
		    Factory::excel()->import();
            return [];
		});
	}


	/**
	 * update excel data
	 *
	 * @param UpdateClient $client
	 * @param ExcelRepositoryContract $excelRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, ExcelRepositoryContract $excelRepository): array|object
	{
		return $this->transaction(function() use($client,$excelRepository) {
		    $client->handle();
		    return $excelRepository->update();
		});
	}
}
