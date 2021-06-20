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
     * @param object|null $builder
     * @return object
     */
	public function localizationsRepository(?object $builder = null): object
	{
		return $this->apply($builder)->where('language_code',appLanguageCode());
	}

    /**
     * after loading for repository
     *
     * @return LocalizationsRepositoryContract
     */
	public function afterLoadingRepository() : LocalizationsRepositoryContract
    {
        $this->repository = $this->instance()->active();

        return $this;
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
