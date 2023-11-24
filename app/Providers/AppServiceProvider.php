<?php

namespace App\Providers;

use App\Exceptions\Exception;
use App\Libs\AppContainer;
use App\Libs\Commands\AddColumnForDatabaseCommand;
use App\Libs\Commands\AppNameCommand;
use App\Libs\Commands\ClientCommand;
use App\Libs\Commands\ControllerCommand;
use App\Libs\Commands\CrudCommand;
use App\Libs\Commands\DatabaseCreatorCommand;
use App\Libs\Commands\DbColumn;
use App\Libs\Commands\Documentation;
use App\Libs\Commands\DocumentationUpdate;
use App\Libs\Commands\DropColumnForDatabaseCommand;
use App\Libs\Commands\EnvironmentCommand;
use App\Libs\Commands\FactoryCommand;
use App\Libs\Commands\FeatureTestCommand;
use App\Libs\Commands\MigrationCommand;
use App\Libs\Commands\ModelCommand;
use App\Libs\Commands\PermissionCommand;
use App\Libs\Commands\Postman;
use App\Libs\Commands\RelationCommand;
use App\Libs\Commands\RenameColumnForDatabaseCommand;
use App\Libs\Commands\RepositoryCommand;
use App\Libs\Commands\RepositoryResourceCommand;
use App\Libs\Commands\RequestCommand;
use App\Libs\Commands\ServiceCommand;
use App\Libs\Commands\SupervisorCommand;
use App\Libs\Commands\UpdateMigrationCommand;
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
        $this->commands([DocumentationUpdate::class]);
        $this->commands([FeatureTestCommand::class]);
        $this->commands([EnvironmentCommand::class]);
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
        $this->commands([AddColumnForDatabaseCommand::class]);
        $this->commands([RenameColumnForDatabaseCommand::class]);
        $this->commands([DropColumnForDatabaseCommand::class]);
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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        AppContainer::set('apiUrl', request()->getSchemeAndHttpHost() . '' . request()->getBaseUrl() . '' . DIRECTORY_SEPARATOR . 'api');
        AppContainer::set('public_path', request()->getSchemeAndHttpHost() . '' . request()->getBasePath());
        $this->checkPaginationValue();
    }

    /**
     * If the page value sent by the client is not numeric, an exception is thrown.
     *
     * @return void
     */
    private function checkPaginationValue(): void
    {
        $page = request()->query('page', 1);

        if (!is_numeric($page)) {
            Exception::customException(trans('exception.page'));
        }

        AppContainer::set('page', (int)$page);
    }
}
