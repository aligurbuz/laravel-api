<?php

namespace App\Libs\Commands;

use App\Constants;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class DatabaseMonitor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data {model} {limit?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Db table entities';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $modelName = $this->argument('model');
        $modelData = explode(':', $modelName);
        /**
         * @var object $model
         */
        $model = Constants::modelNamespace . '\\' . ucfirst($modelData[0]);
        $repository = (new $model)->getRepository();
        $columns = $repository->getColumns();
        $limit = $this->argument('limit') ?? 10;

        if (in_array('id', $columns, true)) {
            $idKey = array_search('id', $columns);
            unset($columns[$idKey]);
        }

        if (isset($modelData[1])) {
            $data = $model::query()->select($columns)->where($repository->getModelCode(), $modelData[1])->get();
        } else {

            if (Str::startsWith($limit, 'filter:')) {
                $filter = str_replace('filter:', '', $limit);
                $filterValue = explode('=', $filter);
                $queryString = $model::query()->select($columns)->where($filterValue[0], $filterValue[1]);
            } else {
                $queryString = $model::query()->select($columns)->take($limit);
            }

            $data = $queryString->orderBy('id', 'desc')->get();
            $count = $queryString->count();
        }

        $this->table($columns, $data, 'box-double');

        if (isset($count)) {
            $this->output->text('There are a total of ' . $count . ' records in the ' . $modelName);
            echo PHP_EOL;
        }

        return Command::SUCCESS;
    }
}
