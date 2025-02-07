<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\Password;

use App\Models\Entities\UserPassword;

trait PasswordPromoterTrait
{
    /**
     * get auto PasswordRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function passwordRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }


    /**
     * get entity for repository
     *
     * @return UserPassword
     */
    public function entity(): UserPassword
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
