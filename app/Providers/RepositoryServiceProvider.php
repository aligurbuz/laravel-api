<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        $this->app->bind(CommentRepositoryContract::class,CommentRepository::class);
        $this->app->bind(LoggerRepositoryContract::class,LoggerRepository::class);
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
