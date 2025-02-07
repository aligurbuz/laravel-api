<?php

namespace App\Policies\Permission;

use App\Facades\Database\Role\Permission;
use App\Facades\Database\Role\Role;
use App\Factory\Factory;
use App\Libs\AppContainer;

abstract class PermissionManager
{
    /**
     * @var string|null
     */
    protected ?string $endpoint = null;

    /**
     * @var bool
     */
    protected bool $negativePermission = false;

    /**
     * constructor for permission facade
     */
    public function __construct()
    {
        $this->endpoint = endpoint(true);
    }

    /**
     * Changes the HTTP Method value of the existing permission information.
     *
     * @param string $http
     * @param string|null $exceptionKey
     * @return void
     */
    public function setEndpointNegativePermission(string $http, ?string $exceptionKey = null): void
    {
        // if the permission is set to false,
        // the rule is that endpoint must be stopped and throw an exception.
        if ($http === strtoupper(httpMethod())) {
            $this->negativePermission = true;
        }

        $this->permission()->instantAssign($http, false);

        // if the exceptionKey value is not null, it means that we will give a special exception message.
        // this value is controlled in the Middleware Permission class.
        if (!is_null($exceptionKey)) {
            AppContainer::setWithTerminating(strtolower($http) . 'PermissionException', $exceptionKey);
        }
    }

    /**
     * get permission facade instance
     *
     * @return Permission
     */
    public function permission(): Permission
    {
        return Role::permission();
    }

    /**
     * It will execute the Endpoint method for
     * the specified HTTP method and put the value into the container.
     *
     * @param string $http
     * @return bool
     */
    public function container(string $http): bool
    {
        $standardMethod = $http . ucfirst($this->endpoint);

        if (method_exists($this, $standardMethod)) {
            $callMethod = $this->{$standardMethod}();
            AppContainer::setWithTerminating($standardMethod . 'Permission', $callMethod);

            return $callMethod;
        }

        return ($this->getEndpointPermission())[strtoupper($http)] ?? true;
    }

    /**
     * get endpoint permission values
     *
     * @return array
     */
    public function getEndpointPermission(): array
    {
        return $this->permission()->get();
    }

    /**
     * @param $name
     * @param $arguments
     * @return bool
     */
    public function __call($name, $arguments): bool
    {
        AppContainer::set('worksPermission', true);

        $standardName = ucfirst($name);
        $withMethod = httpMethod() . $standardName;

        if (method_exists($this, 'init')) {
            $this->init();
        }

        if (method_exists($this, $initStandardName = 'init' . $standardName)) {
            $this->$initStandardName();

            // if the permission is set to false,
            // the rule is that endpoint must be stopped and throw an exception.
            if ($this->negativePermission) {
                $this->negativePermission = false;
                return false;
            }
        }

        if (method_exists($this, $withMethod)) {
            AppContainer::use($withMethod . 'Permission', function () use ($withMethod) {
                return $this->$withMethod();
            });
        }

        if (method_exists($this, $name)) {
            $this->$name();
        }

        return $this->handle();
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        return Factory::permission()->checkEndpoint();
    }

    /**
     * get endpoint for permission
     *
     * @return string
     */
    protected function endpoint(): string
    {
        return $this->endpoint;
    }
}
