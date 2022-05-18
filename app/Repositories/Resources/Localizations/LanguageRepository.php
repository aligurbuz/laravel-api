<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations;

use App\Models\Language;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Resources\Localizations\Events\Language\AfterCreate;
use App\Repositories\Resources\Localizations\Events\Language\AfterUpdate;
use App\Repositories\Resources\Localizations\Events\Language\BeforeCreate;
use App\Repositories\Resources\Localizations\Events\Language\BeforeUpdate;
use App\Repositories\Resources\Localizations\PropertyHandlers\LanguagePropertyHandlerTrait;

class LanguageRepository extends EloquentRepository implements LanguageRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use LanguagePropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Language::class;

    /**
     * get auto LanguageRepository scope method
     * @param object|null $builder
     * @return object
     */
    public function languageRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * find by name for language repository
     *
     * @param null $name
     * @return $this
     */
    public function name($name = null): LanguageRepositoryContract
    {
        $this->repository = $this->instance()->where('name', $name);

        return $this;
    }
}
