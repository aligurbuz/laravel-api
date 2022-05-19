<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations\Promoters\Localizations;

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
}
