<?php

declare(strict_types=1);

namespace App\Repositories\Localizations;

use App\Models\Language;
use App\Repositories\EloquentRepository;
use App\Repositories\Localizations\Contracts\LanguageRepositoryContract;

class LanguageRepository extends EloquentRepository implements LanguageRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Language::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];

	/**
	 * get auto LanguageRepository scope method
	 * @return object
	 */
	public function languageRepository(): object
	{
		return $this->globalScope();
	}

    /**
     * find by name for language repository
     *
     * @param null $name
     * @return $this
     */
	public function findByName($name = null) : LanguageRepositoryContract
    {
        $this->repository = $this->instance()->where('name',$name);

        return $this;
    }
}
