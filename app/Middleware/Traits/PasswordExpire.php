<?php

namespace App\Middleware\Traits;

use App\Exceptions\Exception;
use App\Facades\Database\Authenticate\ApiKey;
use App\Libs\Date;
use App\Repositories\Repository;

trait PasswordExpire
{
    /**
     * last number user password equality control
     *
     * @var int
     */
    protected int $limitation = 3;

    /**
     * @var int
     */
    protected int $expiredAt = 60 * 60 * 24 * 180;

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
        if(!ApiKey::isAdmin()) {
            return true;
        }

        $password = Repository::userPassword()->getRepository();

        if (isset($password[0])) {
            $password = $password[0];

            if (Date::now()> $password['expired_at']) {
                Exception::passwordExpireException();
            }
        }

        return true;
    }
}
