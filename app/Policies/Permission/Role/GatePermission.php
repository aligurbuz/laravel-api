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
        Exception::customException('updatePermission');

        return true;
    }

    /**
     * @return bool
     */
    public function postGatePermissions(): bool
    {
        Exception::customException('createPermission');

        return true;
    }
}
