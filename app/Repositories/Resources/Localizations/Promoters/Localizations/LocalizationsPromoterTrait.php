<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations\Promoters\Localizations;

use App\Models\Entities\Localization;

trait LocalizationsPromoterTrait
{
    /**
     * get auto LocalizationsRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function localizationsRepository(?object $builder = null): object
    {
        return $this->apply($builder)->where('language_code', appLanguageCode());
    }

    /**
     * get entity for repository
     *
     * @return Localization
     */
    public function entity(): Localization
    {
        return parent::entity();
    }
}
