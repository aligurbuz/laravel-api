<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\User\Contracts\UserRepositoryContract;
use App\Repositories\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Countries\Contracts\CountriesRepositoryContract;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository
{
    /**
     * get language repository instance
     *
     * @return LanguageRepositoryContract
     */
    public static function language() : LanguageRepositoryContract
    {
        return app()->get(LanguageRepositoryContract::class);
    }
    
    /**
     * get localization repository instance
     *
     * @return LocalizationsRepositoryContract
     */
    public static function localization() : LocalizationsRepositoryContract
    {
        return app()->get(LocalizationsRepositoryContract::class);
    }
    
    /**
     * get country repository instance
     *
     * @return CountriesRepositoryContract
     */
    public static function country() : CountriesRepositoryContract
    {
        return app()->get(CountriesRepositoryContract::class);
    }

    /**
     * get user repository instance
     *
     * @return UserRepositoryContract
     */
    public static function user() : UserRepositoryContract
    {
        return app()->get(UserRepositoryContract::class);
    }

    /**
     * get logger repository instance
     *
     * @return LoggerRepositoryContract
     */
    public static function logger() : LoggerRepositoryContract
    {
        return app()->get(LoggerRepositoryContract::class);
    }
}
