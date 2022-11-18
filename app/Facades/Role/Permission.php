<?php

namespace App\Facades\Role;

use App\Repositories\Repository;

class Permission
{
    /**
     * @var string|null
     */
    protected ?string $endpoint = null;

    /**
     * set constructor via endpoint
     *
     * @param string $endpoint
     */
    public function __construct(string $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * get roles of the authenticate user
     *
     * @return array
     */
    public function get(): array
    {
        $role = Role::get();

        return $role['roles'] ?? [];
    }

    /**
     * has permission for endpoint
     *
     * @param string $http
     * @return bool
     */
    public function has(string $http = 'GET'): bool
    {
        $permissions = $this->get();

        if (isset($permissions[$this->getPermissionCode()][$http])) {
            return checkBool($permissions[$this->getPermissionCode()][$http]);
        }

        return false;
    }

    /**
     * get permission code for facade
     *
     * @return int|null
     */
    public function getPermissionCode(): ?int
    {
        $endpointPermission = Repository::permission()
            ->endpoint($this->endpoint)->select(['permission_code'])->getRepository();

        return $endpointPermission[0]['permission_code'] ?? null;
    }
}
