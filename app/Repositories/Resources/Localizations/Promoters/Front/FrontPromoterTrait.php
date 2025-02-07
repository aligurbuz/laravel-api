<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations\Promoters\Front;

use App\Models\Entities\FrontLang;

trait FrontPromoterTrait
{
    /**
     * get auto FrontRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function frontRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }


    /**
     * get entity for repository
     *
     * @return FrontLang
     */
    public function entity(): FrontLang
    {
        return parent::entity();
    }


    /**
     * Appends to the end of the returned data.
     *
     * @return array
     */
    public function appends(): array
    {
        return [];
    }
}
