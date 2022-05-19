<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Logger\Promoters\Logger;

trait LoggerPromoterTrait
{
    /**
     * get auto loggerRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function loggerRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
