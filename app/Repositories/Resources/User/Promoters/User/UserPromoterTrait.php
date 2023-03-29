<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\User;

use App\Facades\Role\Role;
use App\Models\Entities\User;
use App\Repositories\Globals\UserCode;
use Illuminate\Support\Facades\App;

trait UserPromoterTrait
{
    /**
     * get auto user range method
     *
     * @param object|null $builder
     * @return object
     */
    public function userRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return User
     */
    public function entity(): User
    {
        return parent::entity();
    }

    /**
     * Appends to the end of the returned data.
     *
     * @return bool[]
     */
    public function appends() : array
    {
        return [];
    }

    /**
     * !!Pay attention here!!!
     * Role::isAdmin method here should not work in console
     * otherwise your system will go in to an infinite loop.
     * if the user is admin, that must see all users.
     *
     * @see UserCode::handle()
     * @return bool
     */
    public function accessible() : bool
    {
        return !App::runningInConsole() && Role::isAdmin();
    }
}
