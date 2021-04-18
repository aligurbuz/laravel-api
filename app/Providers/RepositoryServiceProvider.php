<?php

namespace App\Providers;

use App\Repositories\User\UserRepository;
use App\Repositories\User\Contracts\UserRepositoryContract;
use Illuminate\Support\ServiceProvider;
use App\Repositories\User\Contracts\CommentRepositoryContract;
use App\Repositories\User\CommentRepository;

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
