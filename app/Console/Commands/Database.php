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
        /**
         * @var object $model
         */
        $model = Constants::modelNamespace.'\\'.ucfirst($this->argument('model'));
        $columns = (new $model)->getRepository()->getColumns();
        unset($columns['0']);
        $limit = $this->argument('limit') ?? 10;
        $data = $model::query()->select($columns)->take($limit)->orderBy('id','desc')->get();

        $this->table($columns, $data, 'box-double');



        return Command::SUCCESS;
    }
}
