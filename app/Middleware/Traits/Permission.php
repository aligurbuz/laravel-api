<?php

namespace App\Middleware\Traits;

use App\Constants;
use App\Exceptions\Exception;
use App\Libs\AppContainer;
use App\Policies\Permission\Permission as PermissionFacade;

trait Permission
{
    /**
     * @var array|string[]
     */
    protected array $apiKeys = [
        'admin'
    ];

    /**
     * Handle an incoming request.
     *
     * @return void
     *
     */
    protected function permission(): void
    {
        if ($this->isPermissionFail()) {
            $httpPermissionMessage = httpMethod() . 'PermissionException';

            // if the permissionException value has in container,
            // it means that we will give a special exception message.
            if (AppContainer::has($httpPermissionMessage)) {
                Exception::customException(AppContainer::get($httpPermissionMessage), Constants::error403);
            }

            Exception::permissionException('', endpoint());
        }
    }

    /**
     * get permission condition for middleware
     *
     * @return bool
     */
    private function isPermissionFail(): bool
    {
        $endpoint = endpoint(true);

        return (
            true === config('app.permission')
            && in_array(who(), $this->apiKeys, true)
            && !(new PermissionFacade())->$endpoint()
        );
    }
}
