<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Images;

use App\Models\Entities\CustomerImage;

trait ImagesPromoterTrait
{
    /**
     * get auto ImagesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function imagesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }


    /**
     * get entity for repository
     *
     * @return CustomerImage
     */
    public function entity(): CustomerImage
    {
        return parent::entity();
    }
}
