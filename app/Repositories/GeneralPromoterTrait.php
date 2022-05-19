<?php

declare(strict_types=1);

namespace App\Repositories;

trait GeneralPromoterTrait
{
    /**
     * @return string[]
     */
    public function setWebHidden(): array
    {
        return [
            'created_by',
            'updated_by',
            'deleted_by',
            'deleted_at'
        ];
    }
}
