<?php

declare(strict_types=1);

namespace App\Repositories\Localizations;

use Illuminate\Support\Str;
use App\Models\Localization;
use App\Repositories\EloquentRepository;
use App\Repositories\Localizations\Contracts\LocalizationsRepositoryContract;

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
     *
	 * @return object
	 */
	public function localizationsRepository(): object
	{
		return $this->globalScope()->where('language_code',appLanguageCode());
	}

    /**
     * finds data by localized_code column
     *
     * @param $localizedCode
     * @return LocalizationsRepositoryContract
     */
	public function localizedCode($localizedCode) : LocalizationsRepositoryContract
    {
        $this->repository = $this->instance()->where(Str::snake(__FUNCTION__),intval($localizedCode));

        return $this;
    }
}
