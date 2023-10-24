<?php

namespace App\Policies\Permission;

use App\Policies\Permission\Customer\Profiles as CustomerProfile;
use App\Policies\Permission\User\User;

class Permission extends PermissionManager
{
    use CustomerProfile;
    use User;

    /**
     * The method that will work in common for all permissions.
     * Take a global action.
     *
     * @return void
     */
    public function init(): void
    {
        //
    }
}

