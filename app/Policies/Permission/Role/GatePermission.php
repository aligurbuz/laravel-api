<?php

namespace App\Policies\Permission\Role;

use App\Exceptions\Exception;

trait GatePermission
{
    /**
     * @return bool
     */
    public function putGatePermissions(): bool
    {
        Exception::internalPermissionException('updatePermission');

        return true;
    }

    /**
     * @return bool
     */
    public function postGatePermissions(): bool
    {
        Exception::internalPermissionException('createPermission');

        return true;
    }
}
