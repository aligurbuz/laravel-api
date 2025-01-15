<?php

namespace App\Middleware\Traits;

use App\Exceptions\Exception;
use App\Facades\Database\Authenticate\ApiKey;
use App\Libs\Date;
use App\Repositories\Repository;

trait PasswordExpire
{
    /**
     * @var array|string[]
     */
    protected array $passwordExpireExcept = [
        'password/changes'
    ];

    /**
     * @return bool
     */
    protected function passwordExpire(): bool
    {
        if (!ApiKey::isAdmin()) {
            return true;
        }

        if (config('app.password_expire') === false) {
            return true;
        }

        $password = Repository::userPassword()->active()->getRepository();

        if (isset($password[0])) {
            $password = $password[0];

            if (Date::now() > $password['expired_at']) {
                Exception::passwordExpireException();
            }
        }

        return true;
    }
}
