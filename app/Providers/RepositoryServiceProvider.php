<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Gate\PermissionsRepository;
use App\Repositories\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Gate\RolesRepository;
use App\Repositories\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\SuperAdmins\SuperAdminsRepository;
use App\Repositories\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Localizations\LanguageRepository;
use App\Repositories\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Localizations\LocalizationsRepository;
use App\Repositories\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Countries\CountriesRepository;
use App\Repositories\User\UserRepository;
use App\Repositories\User\CommentRepository;
use App\Repositories\Logger\LoggerRepository;
use App\Repositories\User\Contracts\UserRepositoryContract;
use App\Repositories\User\Contracts\CommentRepositoryContract;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;

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
