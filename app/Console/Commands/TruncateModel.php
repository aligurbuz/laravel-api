<?php

namespace App\Console\Commands;

use App\Exceptions\Exception;
use App\Libs\Db;
use App\Repositories\Repository;
use Illuminate\Console\Command;

class TruncateModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'truncate:model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Truncate model';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if (!app()->isLocal()) {
            Exception::customException('onlyLocal');
        }

        $model = $this->ask('model');

        $code = Repository::$model()->getModelCode();
        $relations = Db::relationCodes();

        foreach ($relations[$code] as $relation) {
            $table = getModelInstance($relation)->getTable();
            \Illuminate\Support\Facades\DB::table($table)->truncate();
        }

        $this->output->success('The related tables have been truncated');
    }
}
