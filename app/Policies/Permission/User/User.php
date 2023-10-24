<?php

namespace App\Policies\Permission\User;

use App\Exceptions\Exception;
use App\Facades\Database\Role\Role;

trait User
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
