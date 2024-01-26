<?php

namespace App\Services\Queue;

use App\Facades\Support\Email\Email;
use App\Facades\Support\Sms\Sms;

class Process
{
    /**
     * @param array $data
     * @param string $emailFacadeMethodName
     * @return void
     */
    public static function email(array $data, string $emailFacadeMethodName): void
    {
        Email::$emailFacadeMethodName($data);
    }

    /**
     * @param array $data
     * @param string $smsFacadeMethodName
     * @return void
     */
    public static function sms(array $data, string $smsFacadeMethodName): void
    {
        Sms::$smsFacadeMethodName($data);
    }
}
