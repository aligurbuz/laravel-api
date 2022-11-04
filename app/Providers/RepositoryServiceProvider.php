<?php

namespace App\Providers;

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
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\User\UserRepository;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(LocalizationsRepositoryContract::class, LocalizationsRepository::class);
        $this->app->bind(LanguageRepositoryContract::class, LanguageRepository::class);
        $this->app->bind(RolesRepositoryContract::class, RolesRepository::class);
        $this->app->bind(PermissionsRepositoryContract::class, PermissionsRepository::class);
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
