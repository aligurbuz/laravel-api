<?php

namespace App\Providers;

use App\Exceptions\Exception;
use App\Services\AppContainer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->checkPaginationValue();
    }

    /**
     * If the page value sent by the client is not numeric, an exception is thrown.
     *
     * @return void
     */
    private function checkPaginationValue() : void
    {
        $page = request()->query->get('page',1);

        if(!is_numeric($page)){
            Exception::customException(trans('exception.page'));
        }

        AppContainer::set('page',(int)$page);
    }
}
