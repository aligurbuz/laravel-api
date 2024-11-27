<?php

namespace App\Facades\Database\Role;

use App\Libs\AppContainer;
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
     * @param string|null $endpoint
     */
    public function __construct(?string $endpoint = null)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Changes the HTTP Method value of the existing permission information.
     *
     * @param string $http
     * @param bool $value
     * @return void
     */
    public function instantAssign(string $http, bool $value): void
    {
        if ($this->has($http)) {
            $permission = $this->get();
            $permission[$http] = $value;

            AppContainer::setWithTerminating('endpointPermission_' . $this->endpoint, $permission);
        }
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

        if (isset($permissions[$http])) {
            return checkBool($permissions[$http]);
        }

        return false;
    }

    /**
     * get roles of the authenticate user
     *
     * @return array
     */
    public function get(): array
    {
        $data = Role::get();

        $role = $data['roles'] ?? [];

        if (!is_null($this->endpoint)) {
            $role = AppContainer::use('endpointPermission_' . $this->endpoint, function () use ($role) {
                return $role[$this->code()] ?? [];
            });
        }

        return array_map(static function ($value) {
            if(is_int($value)){
                return checkBool($value);
            }

            return $value;

        }, $role);
    }

    /**
     * get permission code for facade
     *
     * @return int
     */
    public function code(): int
    {
        return AppContainer::use('permissionCode_' . $this->endpoint, function () {
            $endpointPermission = Repository::permission()
                ->endpoint($this->endpoint)->select(['permission_code'])->getRepository();

            return $endpointPermission[0]['permission_code'] ?? 0;
        });
    }
}
