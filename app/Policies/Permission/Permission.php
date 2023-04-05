<?php

namespace App\Policies\Permission;

use App\Policies\Permission\User\UserPermission;

class Permission extends PermissionManager
{
    use UserPermission;
}

