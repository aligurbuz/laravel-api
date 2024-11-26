<?php

namespace App\Policies\Permission\Role;

use App\Exceptions\Exception;
use App\Facades\Database\Role\Role as RoleFacade;

trait Role
{
    /**
     * @return bool
     */
    public function putGateRoles(): bool
    {
        // You only need to have the admin role to create a user.
        Exception::ifTrue(!RoleFacade::isAdmin(), 'roleUpdatePermission');

        return true;
    }

    /**
     * @return bool
     */
    public function postGateRoles(): bool
    {
        // You only need to have the admin role to create a user.
        Exception::ifTrue(!RoleFacade::isAdmin(), 'roleCreatePermission');

        return true;
    }
}
