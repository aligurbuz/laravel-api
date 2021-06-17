<?php

namespace App\Providers;

use App\Services\ApiKeyManager;
use Illuminate\Support\ServiceProvider;

class ApiKeyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole()===false && !strpos(request()->getRequestUri(),'clockwork')){
            (new ApiKeyManager())->handle();
        }
    }
}
