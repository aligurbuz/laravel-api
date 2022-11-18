<?php

namespace App\Facades\Role;

use App\Repositories\Repository;
use App\Services\AppContainer;

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

        if (isset($permissions[$this->code()][$http])) {
            return checkBool($permissions[$this->code()][$http]);
        }

        return false;
    }

    /**
     * get permission code for facade
     *
     * @return int|null
     */
    public function code(): ?int
    {
        return AppContainer::use('permissionCode',function(){
            $endpointPermission = Repository::permission()
                ->endpoint($this->endpoint)->select(['permission_code'])->getRepository();

            return $endpointPermission[0]['permission_code'] ?? null;
        });
    }
}
