<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerAgesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerGendersRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerImagesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerProfilesRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Resources\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserActivationsRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\Definition\Contracts\DefinitionGendersRepositoryContract;
use App\Repositories\Resources\Password\Contracts\PasswordChangesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerContactsRepositoryContract;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository
{
    /**
     * get gender repository instance
     *
     * @return DefinitionGendersRepositoryContract
     */
    public static function gender() : DefinitionGendersRepositoryContract
    {
        return app()->get(DefinitionGendersRepositoryContract::class);
    }
    
    /**
     * get passwordChange repository instance
     *
     * @return PasswordChangesRepositoryContract
     */
    public static function passwordChange() : PasswordChangesRepositoryContract
    {
        return app()->get(PasswordChangesRepositoryContract::class);
    }
    
    /**
     * get customerContact repository instance
     *
     * @return CustomerContactsRepositoryContract
     */
    public static function customerContact() : CustomerContactsRepositoryContract
    {
        return app()->get(CustomerContactsRepositoryContract::class);
    }

    /**
     * get customerImage repository instance
     *
     * @return CustomerImagesRepositoryContract
     */
    public static function customerImage(): CustomerImagesRepositoryContract
    {
        return app()->get(CustomerImagesRepositoryContract::class);
    }

    /**
     * get customerAge repository instance
     *
     * @return CustomerAgesRepositoryContract
     */
    public static function customerAge(): CustomerAgesRepositoryContract
    {
        return app()->get(CustomerAgesRepositoryContract::class);
    }

    /**
     * get customerGender repository instance
     *
     * @return CustomerGendersRepositoryContract
     */
    public static function customerGender(): CustomerGendersRepositoryContract
    {
        return app()->get(CustomerGendersRepositoryContract::class);
    }

    /**
     * get userActivation repository instance
     *
     * @return UserActivationsRepositoryContract
     */
    public static function userActivation(): UserActivationsRepositoryContract
    {
        return app()->get(UserActivationsRepositoryContract::class);
    }

    /**
     * get customer repository instance
     *
     * @return CustomerProfilesRepositoryContract
     */
    public static function customer(): CustomerProfilesRepositoryContract
    {
        return app()->get(CustomerProfilesRepositoryContract::class);
    }

    /**
     * get excel repository instance
     *
     * @return ExcelRepositoryContract
     */
    public static function excel(): ExcelRepositoryContract
    {
        return app()->get(ExcelRepositoryContract::class);
    }

    /**
     * get registration repository instance
     *
     * @return RegistrationRepositoryContract
     */
    public static function registration(): RegistrationRepositoryContract
    {
        return app()->get(RegistrationRepositoryContract::class);
    }

    /**
     * get userPhoto repository instance
     *
     * @return PhotosRepositoryContract
     */
    public static function userPhoto(): PhotosRepositoryContract
    {
        return app()->get(PhotosRepositoryContract::class);
    }

    /**
     * get timezone repository instance
     *
     * @return TimezonesRepositoryContract
     */
    public static function timezone(): TimezonesRepositoryContract
    {
        return app()->get(TimezonesRepositoryContract::class);
    }

    /**
     * get currency repository instance
     *
     * @return CurrenciesRepositoryContract
     */
    public static function currency(): CurrenciesRepositoryContract
    {
        return app()->get(CurrenciesRepositoryContract::class);
    }

    /**
     * get district repository instance
     *
     * @return DistrictsRepositoryContract
     */
    public static function district(): DistrictsRepositoryContract
    {
        return app()->get(DistrictsRepositoryContract::class);
    }

    /**
     * get city repository instance
     *
     * @return CitiesRepositoryContract
     */
    public static function city(): CitiesRepositoryContract
    {
        return app()->get(CitiesRepositoryContract::class);
    }

    /**
     * get permission repository instance
     *
     * @return PermissionsRepositoryContract
     */
    public static function permission(): PermissionsRepositoryContract
    {
        return app()->get(PermissionsRepositoryContract::class);
    }

    /**
     * get role repository instance
     *
     * @return RolesRepositoryContract
     */
    public static function role(): RolesRepositoryContract
    {
        return app()->get(RolesRepositoryContract::class);
    }

    /**
     * get superAdmin repository instance
     *
     * @return SuperAdminsRepositoryContract
     */
    public static function superAdmin(): SuperAdminsRepositoryContract
    {
        return app()->get(SuperAdminsRepositoryContract::class);
    }

    /**
     * get language repository instance
     *
     * @return LanguageRepositoryContract
     */
    public static function language(): LanguageRepositoryContract
    {
        return app()->get(LanguageRepositoryContract::class);
    }

    /**
     * get localization repository instance
     *
     * @return LocalizationsRepositoryContract
     */
    public static function localization(): LocalizationsRepositoryContract
    {
        return app()->get(LocalizationsRepositoryContract::class);
    }

    /**
     * get country repository instance
     *
     * @return CountriesRepositoryContract
     */
    public static function country(): CountriesRepositoryContract
    {
        return app()->get(CountriesRepositoryContract::class);
    }

    /**
     * get user repository instance
     *
     * @return UserRepositoryContract
     */
    public static function user(): UserRepositoryContract
    {
        return app()->get(UserRepositoryContract::class);
    }

    /**
     * get logger repository instance
     *
     * @return LoggerRepositoryContract
     */
    public static function logger(): LoggerRepositoryContract
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
    public static function __callStatic(?string $name, array $arguments = []): bool
    {
        return false;
    }
}
