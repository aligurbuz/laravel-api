<?php

namespace App\Console\Commands;

use App\Libs\Db;
use Illuminate\Console\Command;

class Dummy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dummy {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Dummy Data For Repository';

    /**
     * Execute the console command.
     *
     */
    public function handle(): void
    {
        $model = $this->argument('model');
        $this->output->definitionList(
            json_encode(
                Db::dummy($model),
                1
            )
        );
    }
}
