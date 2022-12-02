<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;

class User
{
    /**
     * this code looks at the user's status and is_deleted fields.
     * It will throw an exception if the status field value is 0 or the is_deleted field is 1.
     *
     * @return void
     */
    public static function isActive(): void
    {
        /*** @var object $user */
        $user = Authenticate::guard()->user();

        if ($user->is_deleted) {
            Exception::customException('deletedUser');
        }

        if (!$user->status) {
            Exception::customException('notActiveUser');
        }
    }
}
