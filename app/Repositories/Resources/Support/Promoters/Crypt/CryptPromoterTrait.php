<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support\Promoters\Crypt;

use App\Models\Entities\Crypt;

trait CryptPromoterTrait
{
    /**
     * get auto CryptRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function cryptRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }


    /**
     * get entity for repository
     *
     * @return Crypt
     */
    public function entity(): Crypt
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


    /**
     * Create Process Failed.
     *
     * @return void
     */
    public function createFailed(): void
    {
        //
    }


    /**
     * Update Process Failed.
     *
     * @return void
     */
    public function updateFailed(): void
    {
        //
    }
}
