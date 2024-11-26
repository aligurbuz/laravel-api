<?php

namespace App\Client\Gate\Roles\Update;

use App\Facades\Database\Role\Role;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = [
        'roles'
    ];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = [
        'roles'
    ];

    /**
     * @return mixed
     */
    public function rolesGenerator(): mixed
    {
        $userRole = Role::get();
        $clientRoles = $this->get('roles');

        foreach ($clientRoles as $permissionCode => $permissions) {
            if (isset($userRole['roles'][$permissionCode])) {
                $userRole['roles'][$permissionCode] = $permissions;
            }
        }

        return $userRole['roles'];
    }
}
