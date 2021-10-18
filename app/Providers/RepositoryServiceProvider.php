<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Resources\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Resources\User\PhotosRepository;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Resources\Timezones\TimezonesRepository;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Resources\Currencies\CurrenciesRepository;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Resources\Countries\DistrictsRepository;
use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Resources\Countries\CitiesRepository;
use App\Repositories\Resources\Mix\Contracts\TableChangesRepositoryContract;
use App\Repositories\Resources\Mix\TableChangesRepository;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\PermissionsRepository;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\Gate\RolesRepository;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\SuperAdmins\SuperAdminsRepository;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Resources\Localizations\LanguageRepository;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Resources\Localizations\LocalizationsRepository;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Resources\Countries\CountriesRepository;
use App\Repositories\Resources\User\UserRepository;
use App\Repositories\Resources\Logger\LoggerRepository;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryContract::class,UserRepository::class);
        $this->app->bind(LoggerRepositoryContract::class,LoggerRepository::class);
        $this->app->bind(CountriesRepositoryContract::class,CountriesRepository::class);
        $this->app->bind(LocalizationsRepositoryContract::class,LocalizationsRepository::class);
        $this->app->bind(LanguageRepositoryContract::class,LanguageRepository::class);
        $this->app->bind(SuperAdminsRepositoryContract::class,SuperAdminsRepository::class);
        $this->app->bind(RolesRepositoryContract::class,RolesRepository::class);
        $this->app->bind(PermissionsRepositoryContract::class,PermissionsRepository::class);
        $this->app->bind(TableChangesRepositoryContract::class,TableChangesRepository::class);
        $this->app->bind(CitiesRepositoryContract::class,CitiesRepository::class);
        $this->app->bind(DistrictsRepositoryContract::class,DistrictsRepository::class);
        $this->app->bind(CurrenciesRepositoryContract::class,CurrenciesRepository::class);
        $this->app->bind(TimezonesRepositoryContract::class,TimezonesRepository::class);
        $this->app->bind(PhotosRepositoryContract::class,PhotosRepository::class);
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
