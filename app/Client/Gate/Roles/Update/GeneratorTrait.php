<?php

namespace App\Client\Gate\Roles\Update;

use App\Exceptions\Exception;
use App\Facades\Database\Role\Permission;
use App\Facades\Database\Role\Role;
use App\Factory\Factory;

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
        $permissionData = (new Permission())->get();
        $clientRoles = $this->get('roles');
        $formatter = Factory::permission()->formatter();

        foreach ($clientRoles as $permissionCode => $permissions) {

            if (!isset($permissionData[$permissionCode])) {
                Exception::customException('invalidPermissionCode', ['code' => $permissionCode]);
            }

            foreach ($permissions as $clientFormatKey => $clientFormatValue) {
                if (!isset($formatter[$clientFormatKey])) {
                    Exception::customException('invalidRoleFormatKey', [
                        'key' => $clientFormatKey,
                        'code' => $permissionCode
                    ]);
                }

                if (
                    $clientFormatKey === 'GET'
                    || $clientFormatKey === 'POST'
                    || $clientFormatKey === 'PUT'
                    || $clientFormatKey === 'DELETE'
                ) {
                    if ($clientFormatValue !== 1 && $clientFormatValue !== 0) {
                        Exception::customException('invalidRoleFormatValue', [
                            'key' => $clientFormatKey,
                            'value' => $clientFormatValue,
                            'code' => $permissionCode
                        ]);
                    }
                }
            }

            $userRole['roles'][$permissionCode] = array_merge($formatter, $permissions);
        }


        return $userRole['roles'];
    }
}
