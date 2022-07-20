<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations\Promoters\Language;

use App\Models\Entities\Language;

trait LanguagePromoterTrait
{
    /**
     * get auto LanguageRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function languageRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return Language
     */
    public function entity(): Language
    {
        return parent::entity();
    }
}
