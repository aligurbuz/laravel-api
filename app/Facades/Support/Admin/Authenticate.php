<?php

namespace App\Facades\Support\Admin;

use Illuminate\Support\Facades\Session;

class Authenticate
{
    public static function token()
    {
        return Session::get('adminAuth');
    }

    public static function user()
    {
        return Session::get('adminUser');
    }

    public static function userName()
    {
        return static::user()['username'] ?? null;
    }
}
