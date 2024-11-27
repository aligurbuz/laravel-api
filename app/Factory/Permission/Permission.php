<?php

declare(strict_types=1);

namespace App\Factory\Permission;

use App\Facades\Database\Role\Role;
use App\Factory\Permission\Interfaces\PermissionInterface;
use App\Libs\AppContainer;
use App\Repositories\Repository;

/**
 * Class Permission
 * @package App\Factory\Permission
 */
class Permission extends PermissionManager implements PermissionInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * Permission constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * checks if the permission is valid for route
     *
     * @return bool
     */
    public function checkEndpoint(): bool
    {
        $role = (Role::get())['roles'] ?? [];
        $permissionCode = Role::permission()->code();

        if (isset($role[$permissionCode][request()->method()])) {
            return checkBool($role[$permissionCode][request()->method()]);
        }

        return true;
    }

    /**
     * get all permission for factory
     *
     * @return array
     */
    public function get(): array
    {
        return AppContainer::use('permissions', function (){
            return Repository::permission()->orderBy('endpoint','asc')->all();
        });
    }

    /**
     * get role formatter for factory
     *
     * @return array
     */
    public function roleFormatter(): array
    {
        $permissions = $this->get();

        $list = [];

        foreach ($permissions as $permission) {
            $list[($permission['permission_code'] ?? 0)] = [
                'GET' => 1,
                'POST' => 1,
                'PUT' => 1,
                'DELETE' => 1,
                'EXTRA' => []
            ];
        }

        return $list;
    }
}
