<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations;

use App\Models\Localization;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Resources\Localizations\Events\Localizations\AfterCreate;
use App\Repositories\Resources\Localizations\Events\Localizations\AfterUpdate;
use App\Repositories\Resources\Localizations\Events\Localizations\BeforeCreate;
use App\Repositories\Resources\Localizations\Events\Localizations\BeforeUpdate;
use App\Repositories\Resources\Localizations\Promoters\Localizations\LocalizationsPromoterTrait;
use App\Repositories\Resources\Localizations\PropertyHandlers\LocalizationsPropertyHandlerTrait;
use Illuminate\Support\Str;

class LocalizationsRepository extends EloquentRepository implements LocalizationsRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use GeneralPromoterTrait;
    use LocalizationsPromoterTrait;
    use LocalizationsPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Localization::class;

    /**
     * finds data by localized_code column
     *
     * @param $localizedCode
     * @return LocalizationsRepositoryContract
     */
    public function localizedCode($localizedCode): LocalizationsRepositoryContract
    {
        $this->repository = $this->instance()
            ->where('language_code', appLanguageCode())->where(Str::snake(__FUNCTION__), intval($localizedCode));

        return $this;
    }
}
