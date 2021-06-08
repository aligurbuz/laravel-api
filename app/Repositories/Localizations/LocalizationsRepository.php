<?php 

namespace App\Repositories\Localizations;

use App\Models\Localization;
use App\Repositories\EloquentRepository;
use App\Repositories\Localizations\Contracts\LocalizationsRepositoryContract;
use Illuminate\Database\Eloquent\Builder;

class LocalizationsRepository extends EloquentRepository implements LocalizationsRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Localization::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];


	/**
	 * get auto LocalizationsRepository scope method
	 * @return object
	 */
	public function localizationsRepository(): object
	{
		return $this->globalScope();
	}
}
