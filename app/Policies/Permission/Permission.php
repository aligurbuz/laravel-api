<?php

namespace App\Policies\Permission;

use App\Policies\Permission\User\UserPermission;

class Permission extends PermissionManager
{
    use UserPermission;

    /**
     * The method that will work in common for all permissions.
     * Take a global action.
     *
     * @return void
     */
    public function init() : void
    {
        // this writes the permission values for
        // the endpoint for the client to the instructions values in the returned response layer.
        setInstruction(['accessible' => $this->getEndpointPermission()]);
    }
}

