<?php

namespace App\Facades\Permission;

use App\Exceptions\Exception;
use App\Facades\Role\Role;

class Permission extends PermissionManager
{
    /**
     * Only admins can create users.
     *
     * @return bool
     */
    public function postUser() : bool
    {
        // You only need to have the admin role to create a user.
        Exception::ifTrue(!Role::isAdmin(),'userPostPermission');

        return true;
    }
}
