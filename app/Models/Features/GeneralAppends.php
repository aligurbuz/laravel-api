<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Libs\Date;
use Illuminate\Support\Carbon;

/**
 * Trait GeneralAppends
 * @property Carbon created_at
 * @property Carbon updated_at
 * @package App\Models\Features
 */
trait GeneralAppends
{
    /**
     * get created_at_human attribute for model
     *
     * @return ?string
     */
    public function getCreatedAtHumanAttribute(): ?string
    {
        $createdAt = $this->created_at;

        if (is_null($createdAt)) return null;

        return Date::createFormat($createdAt->toDateTimeString())->diffForHumans();
    }

    /**
     * get updated_at_human attribute for model
     *
     * @return ?string
     */
    public function getUpdatedAtHumanAttribute(): ?string
    {
        $updatedAt = $this->updated_at;

        if (is_null($updatedAt)) return null;

        return Date::createFormat($updatedAt->toDateTimeString())->diffForHumans();
    }
}
