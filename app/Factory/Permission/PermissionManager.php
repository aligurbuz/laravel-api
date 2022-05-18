<?php

declare(strict_types=1);

namespace App\Factory\Permission;

abstract class PermissionManager
{
    /**
     * get permission handler for factory
     *
     * @param array $role
     * @param array $permission
     * @return bool
     */
    public function permissionHandler(array $role, array $permission): bool
    {
        if (isset($role[0]['roles'], $permission[0]['permission_code'])) {
            $roles = $role[0]['roles'];
            $permissionCode = $permission[0]['permission_code'];

            if (isset($roles[$permissionCode], $roles[$permissionCode][request()->method()])) {
                $method = $roles[$permissionCode][request()->method()];

                if ($method == '0') {
                    return false;
                }
            }
        }

        return true;
    }
}
