<?php

namespace App\Providers;

use App\Exceptions\Exception;
use App\Services\AppContainer;
use App\Services\Commands\AppNameCommand;
use App\Services\Commands\ClientCommand;
use App\Services\Commands\ControllerCommand;
use App\Services\Commands\CrudCommand;
use App\Services\Commands\DatabaseCreatorCommand;
use App\Services\Commands\DbColumn;
use App\Services\Commands\Documentation;
use App\Services\Commands\FactoryCommand;
use App\Services\Commands\MigrationCommand;
use App\Services\Commands\ModelCommand;
use App\Services\Commands\PermissionCommand;
use App\Services\Commands\Postman;
use App\Services\Commands\RelationCommand;
use App\Services\Commands\RepositoryCommand;
use App\Services\Commands\RepositoryResourceCommand;
use App\Services\Commands\RequestCommand;
use App\Services\Commands\ServiceCommand;
use App\Services\Commands\SupervisorCommand;
use App\Services\Commands\UpdateMigrationCommand;
use Illuminate\Database\Eloquent\Builder;
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
        $this->fullToSql();
        $this->commands([AppNameCommand::class]);
        $this->commands([ClientCommand::class]);
        $this->commands([ControllerCommand::class]);
        $this->commands([CrudCommand::class]);
        $this->commands([DatabaseCreatorCommand::class]);
        $this->commands([DbColumn::class]);
        $this->commands([Documentation::class]);
        $this->commands([FactoryCommand::class]);
        $this->commands([MigrationCommand::class]);
        $this->commands([ModelCommand::class]);
        $this->commands([PermissionCommand::class]);
        $this->commands([Postman::class]);
        $this->commands([RelationCommand::class]);
        $this->commands([RepositoryCommand::class]);
        $this->commands([RepositoryResourceCommand::class]);
        $this->commands([RequestCommand::class]);
        $this->commands([ServiceCommand::class]);
        $this->commands([SupervisorCommand::class]);
        $this->commands([UpdateMigrationCommand::class]);
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

    /**
     * set macro full to sql for builder query
     *
     * @return void
     */
    private function fullToSql()
    {
        Builder::macro('toFullSql', function () {
            /*** @var Builder $this */
            $sql = str_replace(['%', '?'], ['%%', '%s'], $this->toSql());

            $handledBindings = array_map(function ($binding) {
                if (is_numeric($binding)) {
                    return $binding;
                }

                $value = str_replace(['\\', "'"], ['\\\\', "\'"], $binding);

                return "'{$value}'";
            }, $this->getConnection()->prepareBindings($this->getBindings()));

            return vsprintf($sql, $handledBindings);
        });
    }
}
