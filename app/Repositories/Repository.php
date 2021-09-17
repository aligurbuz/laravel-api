<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\User\Contracts\UserRepositoryContract;
use App\Repositories\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Mix\Contracts\TableChangesRepositoryContract;
use App\Repositories\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
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
     * get userPhoto repository instance
     *
     * @return PhotosRepositoryContract
     */
    public static function userPhoto() : PhotosRepositoryContract
    {
        return app()->get(PhotosRepositoryContract::class);
    }
    
    /**
     * get timezone repository instance
     *
     * @return TimezonesRepositoryContract
     */
    public static function timezone() : TimezonesRepositoryContract
    {
        return app()->get(TimezonesRepositoryContract::class);
    }
    
    /**
     * get currency repository instance
     *
     * @return CurrenciesRepositoryContract
     */
    public static function currency() : CurrenciesRepositoryContract
    {
        return app()->get(CurrenciesRepositoryContract::class);
    }
    
    /**
     * get district repository instance
     *
     * @return DistrictsRepositoryContract
     */
    public static function district() : DistrictsRepositoryContract
    {
        return app()->get(DistrictsRepositoryContract::class);
    }
    
    /**
     * get city repository instance
     *
     * @return CitiesRepositoryContract
     */
    public static function city() : CitiesRepositoryContract
    {
        return app()->get(CitiesRepositoryContract::class);
    }
    
    /**
     * get tableChange repository instance
     *
     * @return TableChangesRepositoryContract
     */
    public static function tableChange() : TableChangesRepositoryContract
    {
        return app()->get(TableChangesRepositoryContract::class);
    }
    
    /**
     * get permission repository instance
     *
     * @return PermissionsRepositoryContract
     */
    public static function permission() : PermissionsRepositoryContract
    {
        return app()->get(PermissionsRepositoryContract::class);
    }
    
    /**
     * get role repository instance
     *
     * @return RolesRepositoryContract
     */
    public static function role() : RolesRepositoryContract
    {
        return app()->get(RolesRepositoryContract::class);
    }
    
    /**
     * get superAdmin repository instance
     *
     * @return SuperAdminsRepositoryContract
     */
    public static function superAdmin() : SuperAdminsRepositoryContract
    {
        return app()->get(SuperAdminsRepositoryContract::class);
    }
    
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

    /**
     * get call static for repository
     *
     * @param string|null $name
     * @param array $arguments
     * @return bool;
     */
    public static function __callStatic(?string $name,array $arguments = []) : bool
    {
        return false;
    }
}
