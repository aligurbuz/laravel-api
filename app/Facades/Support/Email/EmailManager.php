<?php

namespace App\Facades\Support\Email;

use App\Facades\FacadeManager;
use Illuminate\Support\Facades\Mail;

class EmailManager extends FacadeManager
{
    /**
     * @param array $data
     * @param string $job
     * @return void
     */
    public static function mail(array $data, string $job): void
    {
        Mail::to($data['to'])->send(new $job($data));
    }
}
