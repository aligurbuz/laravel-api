<?php

namespace App\Facades\Permission;

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
        return Role::isAdmin();
    }
}
