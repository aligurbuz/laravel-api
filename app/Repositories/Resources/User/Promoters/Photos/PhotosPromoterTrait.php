<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\Photos;

trait PhotosPromoterTrait
{
    /**
     * get auto PhotosRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function photosRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
