<?php

namespace App\Console\Commands;

use App\Repositories\Repository;
use Illuminate\Console\Command;

class Seeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $model = $this->ask('model name');
        $count = $this->ask('How many seeds will be planted?',1);

        $repository = getModelInstance(ucfirst($model))->getRepository();

        $repository->createDummy($count);

        $this->output->success('seed success');
    }
}
