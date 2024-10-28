<?php

namespace App\Console\Commands;

use App\Constants;
use Illuminate\Console\Command;

class Database extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db {model} {limit?}';

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
        $modelData = explode(':', $this->argument('model'));
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
            $data = $model::query()->select($columns)->take($limit)->orderBy('id', 'desc')->get();
        }

        $this->table($columns, $data, 'box-double');

        return Command::SUCCESS;
    }
}
