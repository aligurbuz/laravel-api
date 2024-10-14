<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Octane\Exceptions\DdException;

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
     * @throws DdException
     */
    public function handle()
    {
        $model = $this->argument('model');

        $repository = getModelInstance(ucfirst($model))->getRepository();
        $this->output->definitionList(json_encode($repository->dummy(),1));
    }
}
