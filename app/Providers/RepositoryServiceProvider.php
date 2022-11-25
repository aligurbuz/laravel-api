<?php

namespace App\Providers;

use App\Repositories\Resources\Countries\CitiesRepository;
use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Resources\Countries\CountriesRepository;
use App\Repositories\Resources\Countries\DistrictsRepository;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Resources\Currencies\CurrenciesRepository;
use App\Repositories\Resources\Customer\AgesRepository as CustomerAgesRepository;
use App\Repositories\Resources\Customer\Contracts\CustomerAgesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerGendersRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerImagesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerProfilesRepositoryContract;
use App\Repositories\Resources\Customer\GendersRepository as CustomerGendersRepository;
use App\Repositories\Resources\Customer\ImagesRepository as CustomerImagesRepository;
use App\Repositories\Resources\Customer\ProfilesRepository as CustomerProfilesRepository;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\Gate\PermissionsRepository;
use App\Repositories\Resources\Gate\RolesRepository;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Resources\Localizations\LanguageRepository;
use App\Repositories\Resources\Localizations\LocalizationsRepository;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Resources\Logger\LoggerRepository;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;
use App\Repositories\Resources\Registration\RegistrationRepository;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\SuperAdmins\SuperAdminsRepository;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;
use App\Repositories\Resources\Support\ExcelRepository;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Resources\Timezones\TimezonesRepository;
use App\Repositories\Resources\User\ActivationsRepository as UserActivationsRepository;
use App\Repositories\Resources\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserActivationsRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\User\PhotosRepository;
use App\Repositories\Resources\User\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Resources\Store\Contracts\StoreProductsRepositoryContract;
use App\Repositories\Resources\Store\ProductsRepository as StoreProductsRepository;
use App\Repositories\Resources\Customer\Contracts\CustomerContactsRepositoryContract;
use App\Repositories\Resources\Customer\ContactsRepository as CustomerContactsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryContract::class, UserRepository::class);
        $this->app->bind(LoggerRepositoryContract::class, LoggerRepository::class);
        $this->app->bind(CountriesRepositoryContract::class, CountriesRepository::class);
        $this->app->bind(LocalizationsRepositoryContract::class, LocalizationsRepository::class);
        $this->app->bind(LanguageRepositoryContract::class, LanguageRepository::class);
        $this->app->bind(SuperAdminsRepositoryContract::class, SuperAdminsRepository::class);
        $this->app->bind(RolesRepositoryContract::class, RolesRepository::class);
        $this->app->bind(PermissionsRepositoryContract::class, PermissionsRepository::class);
        $this->app->bind(CitiesRepositoryContract::class, CitiesRepository::class);
        $this->app->bind(DistrictsRepositoryContract::class, DistrictsRepository::class);
        $this->app->bind(CurrenciesRepositoryContract::class, CurrenciesRepository::class);
        $this->app->bind(TimezonesRepositoryContract::class, TimezonesRepository::class);
        $this->app->bind(PhotosRepositoryContract::class, PhotosRepository::class);
        $this->app->bind(RegistrationRepositoryContract::class, RegistrationRepository::class);
        $this->app->bind(ExcelRepositoryContract::class, ExcelRepository::class);
        $this->app->bind(CustomerProfilesRepositoryContract::class, CustomerProfilesRepository::class);
        $this->app->bind(UserActivationsRepositoryContract::class, UserActivationsRepository::class);
        $this->app->bind(CustomerGendersRepositoryContract::class, CustomerGendersRepository::class);
        $this->app->bind(CustomerAgesRepositoryContract::class, CustomerAgesRepository::class);
        $this->app->bind(CustomerImagesRepositoryContract::class, CustomerImagesRepository::class);
        $this->app->bind(CustomerContactsRepositoryContract::class,CustomerContactsRepository::class);
        $this->app->bind(StoreProductsRepositoryContract::class,StoreProductsRepository::class);
        //newBind
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
