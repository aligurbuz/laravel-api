<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;
use App\Services\AppContainer;

class User
{
    /**
     * @return mixed
     */
    public static function get(): object
    {
        return AppContainer::use('user', static function () {
            return Guard::get()->user();
        });
    }

    /**
     * this code looks at the user's status and is_deleted fields.
     * It will throw an exception if the status field value is 0 or the is_deleted field is 1.
     *
     * @return void
     */
    public static function isActive(): void
    {
        /*** @var object $user */
        $user = static::get();

        if ($user->is_deleted) {
            Exception::customException('deletedUser');
        }

        if (!$user->status) {
            Exception::customException('notActiveUser');
        }
    }

    /**
     * get user phone
     *
     * @return string|null
     */
    public static function phone() : ?string
    {
        return static::get()?->phone;
    }

    /**
     * Checks the validity of the email for the user.
     *
     * @param string $email
     * @param bool $auth
     * @return array
     */
    public static function withEmail(string $email, bool $auth = true): array
    {
        $user = Guard::repository($auth)->where('email', $email)->active()->get();

        if (!count($user)) {
            Exception::customException('invalid_email');
        }

        AppContainer::setWithTerminating('user', $user[0]);

        return $user->toArray();
    }
}
