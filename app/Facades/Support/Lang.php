<?php

namespace App\Facades\Support;

use App\Services\AppContainer;

class Lang
{
    /**
     * get language value for lang facade
     *
     * @return string
     */
    public static function get(): string
    {
        return lang();
    }

    /**
     * set language value for lang facade
     *
     * @param string $value
     * @return void
     */
    public static function set(string $value): void
    {
        AppContainer::setWithTerminating('language', $value);
    }
}
