<?php

namespace App\Providers;

use App\Exceptions\Exception;
use App\Services\AppContainer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
        $this->createDatabase();
    }
    
    public function createDatabase()
    {
        if($this->app->runningInConsole() && !File::exists('checkDb')){
            $databases = DB::select('SHOW DATABASES');
            
            $list = [];
            
            foreach ($databases as $database){
                $list[] = $database->Database;
            }
            
            $appDatabase = config('database.connections.'.config('database.default').'.database');
            
            if(!in_array($appDatabase,$list)){
                DB::select('CREATE DATABASE '.$appDatabase);
                File::put('checkDb','');
            }
        }
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
