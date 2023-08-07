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
     * @param string|null $endpoint
     */
    public function __construct(?string $endpoint = null)
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
        $data = Role::get();

        $role = $data['roles'] ?? [];

        if (!is_null($this->endpoint)) {
            $role = AppContainer::use('endpointPermission_'.$this->endpoint,function() use($role){
                 return $role[$this->code()] ?? [];
            });
        }

        return array_map(static function($value){
            return checkBool($value);
        },$role);
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
     * get permission code for facade
     *
     * @return int
     */
    public function code(): int
    {
        return AppContainer::use('permissionCode_'.$this->endpoint, function () {
            $endpointPermission = Repository::permission()
                ->endpoint($this->endpoint)->select(['permission_code'])->getRepository();

            return $endpointPermission[0]['permission_code'] ?? 0;
        });
    }

    /**
     * Changes the HTTP Method value of the existing permission information.
     *
     * @param string $http
     * @param bool $value
     * @return void
     */
    public function assign(string $http, bool $value) : void
    {
        if($this->has($http)){
            $permission = $this->get();
            $permission[$http] = $value;

            AppContainer::setWithTerminating('endpointPermission_'.$this->endpoint,$permission);
        }
    }
}
