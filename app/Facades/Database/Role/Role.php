<?php

declare(strict_types=1);

namespace App\Facades\Database\Role;

use App\Factory\Factory;
use App\Libs\AppContainer;
use App\Repositories\Repository;

class Role
{
    /**
     * checks if the user is isAdmin for facade
     *
     * @param callable|null $callback
     * @return bool
     */
    public static function isAdmin(?callable $callback = null): bool
    {
        //Never remove isAdmin container execution.
        $isAdminValue = AppContainer::use('isAdmin', static function () {
            return (static::get())['is_administrator'] ?? false;
        });

        $isAdmin = checkBool($isAdminValue);

        if ($isAdmin && is_callable($callback)) {
            return $callback();
        }

        return $isAdmin;
    }

    /**
     * get role data information for facade
     *
     * @return array
     */
    public static function get(): array
    {
        $userRole = AppContainer::use('role', static function () {
            return Repository::user()->auth()->role()->getRepository();
        });

        return $userRole[0]['role'][0] ?? [];
    }

    /**
     * get roles except admin for role facade
     *
     * @param array $select
     * @return array
     */
    public static function getRolesExceptAdmin(array $select = []): array
    {
        (count($select)) ? $select[] = 'is_administrator' : $select[] = '*';

        $rolesExceptAdmin = Repository::role()->select($select)->getRepository();

        return array_values(
            collect($rolesExceptAdmin)
                ->where('is_administrator', 0)->all()
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

    /**
     * get permission instance for role facade
     *
     * @param string|null $endpoint
     * @return Permission
     */
    public static function permission(?string $endpoint = null): Permission
    {
        return new Permission($endpoint ?? endpoint());
    }

    /**
     * get role name for facade
     *
     * @return string
     */
    public static function getName(): string
    {
        return (static::get())['role_name'];
    }

    /**
     * get role code for facade
     *
     * @return int
     */
    public static function getCode(): int
    {
        return (static::get())['role_code'];
    }
}
