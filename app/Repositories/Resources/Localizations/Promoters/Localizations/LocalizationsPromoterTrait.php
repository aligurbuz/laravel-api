<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations\Promoters\Localizations;

use App\Facades\Database\Language\Language;
use App\Libs\Client;
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
        if(endpoint() === 'localizations' && is_null(Client::lang())){
            return $this->apply($builder);
        }

        return $this->apply($builder)->where('language_code', Language::code());
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
