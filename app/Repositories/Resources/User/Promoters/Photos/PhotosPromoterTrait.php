<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\Photos;

use App\Models\Entities\UserPhoto;

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

    /**
     * get entity for repository
     *
     * @return UserPhoto
     */
    public function entity(): UserPhoto
    {
        return parent::entity();
    }
}
