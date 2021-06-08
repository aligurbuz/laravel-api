<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Localizations;

use App\Client\Localizations\Localizations\Create\CreateClient;
use App\Client\Localizations\Localizations\Get\GetClient;
use App\Client\Localizations\Localizations\Update\UpdateClient;
use App\Http\Controllers\ApiController;
use App\Repositories\Localizations\Contracts\LocalizationsRepositoryContract;

class LocalizationsController extends ApiController
{
	/**
	 * get localizations data
	 *
	 * @param GetClient $client
	 * @param LocalizationsRepositoryContract $localizationsRepository
	 * @return array
	 */
	public function get(GetClient $client, LocalizationsRepositoryContract $localizationsRepository): array
	{
		$client->handle();
		return $localizationsRepository->get();
	}


	/**
	 * create localizations data
	 *
	 * @param CreateClient $client
	 * @param LocalizationsRepositoryContract $localizationsRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, LocalizationsRepositoryContract $localizationsRepository): array|object
	{
		return $this->transaction(function() use($client,$localizationsRepository) {
		    $client->handle();
		    return $localizationsRepository->create();
		});
	}


	/**
	 * update localizations data
	 *
	 * @param UpdateClient $client
	 * @param LocalizationsRepositoryContract $localizationsRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, LocalizationsRepositoryContract $localizationsRepository): array|object
	{
		return $this->transaction(function() use($client,$localizationsRepository) {
		    $client->handle();
		    return $localizationsRepository->update();
		});
	}
}
