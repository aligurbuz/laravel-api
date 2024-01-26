<?php

namespace App\Facades\Support\Queue;

use App\Facades\Support\Email\Email;

class Process
{
    public static function email(array $data, string $emailFacadeMethodName): void
    {
        Email::$emailFacadeMethodName($data);
    }
}
