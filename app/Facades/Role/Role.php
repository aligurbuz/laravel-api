<?php

declare(strict_types=1);

namespace App\Facades\Role;

use App\Factory\Factory;
use App\Repositories\Repository;
use App\Services\AppContainer;

class Role
{
    /**
     * repository cache for data
     *
     * @param object $repository
     * @return array
     */
    private static function memory(object $repository) : array
    {
        return $repository->memory();
    }

    /**
     * get role data information for facade
     *
     * @return array
     */
    public static function get(): array
    {
        $userRole = AppContainer::use('role', function () {
            return static::memory(Repository::user()->role());
        });

        return $userRole[0]['role'][0] ?? [];
    }

    /**
     * checks if the user is isAdmin for facade
     *
     * @return bool
     */
    public static function isAdmin(): bool
    {
        $isAdminValue = (static::get())['is_administrator'] ?? false;

        return checkBool($isAdminValue);
    }

    /**
     * get roles except admin for role facade
     *
     * @param array $select
     * @return array
     */
    public static function getRolesExceptAdmin(array $select = []) : array
    {
        (count($select)) ? $select[] = 'is_administrator' : $select[] = '*';

        $rolesExceptAdmin = static::memory(Repository::role()->select($select));

        return array_values(
            collect($rolesExceptAdmin)
                ->where('is_administrator',0)->all()
        );
    }

    /**
     * creates role for factory
     *
     * @return array
     */
    public static function createAdministrator(): array
    {
        $clientRequest = cR('gate.roles.create', [[
            'role_app_code' => time(),
            'role_name' => 'Administrator',
            'is_administrator' => 1,
            'roles' => Factory::permission()->roleFormatter()
        ]]);

        return Repository::role()->create([$clientRequest]);
    }
}
