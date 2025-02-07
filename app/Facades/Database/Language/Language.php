<?php

namespace App\Facades\Database\Language;

use App\Libs\AppContainer;
use App\Libs\Client;
use App\Repositories\Repository;

class Language
{
    /**
     * @param string|null $acceptLanguage
     * @return mixed|null
     */
    public static function code(?string $acceptLanguage = null): mixed
    {
        $repository = static::get(
            ($acceptLanguage ?: Client::lang())
        );

        return $repository[0]['language_code'] ?? null;
    }

    /**
     * @param string $acceptLanguage
     * @return mixed
     */
    public static function get(string $acceptLanguage): mixed
    {
        return AppContainer::use('language_' . $acceptLanguage, function () use ($acceptLanguage) {
            return Repository::language()->name($acceptLanguage)->getRepository();
        });
    }
}
