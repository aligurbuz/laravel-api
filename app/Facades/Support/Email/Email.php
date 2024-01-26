<?php

namespace App\Facades\Support\Email;

use App\Facades\Support\Email\Traits\User;
use App\Mail\TestEmail;

class Email extends EmailManager
{
    use User;

    /**
     * @param array $data
     * @return void
     */
    public static function test(array $data = []): void
    {
        static::mail($data, TestEmail::class);
    }
}
