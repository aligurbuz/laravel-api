<?php

namespace App\Facades\Support\Email;

use App\Facades\FacadeManager;
use App\Facades\Support\Email\Traits\User;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class Email extends FacadeManager
{
    use User;

    public static function test(array $data = []): void
    {
        Mail::to($data['to'])->send(new TestEmail($data));
    }
}
