<?php

namespace App\Libs\Commands;

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
    protected $description = 'generate seed for model';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $model = $this->ask('model name');
        $count = $this->ask('How many seeds will be planted?', 1);

        $repository = getModelInstance(ucfirst($model))->getRepository();

        $progressBar = $this->output->createProgressBar($count);

        $progressBar->start();

        for ($i = 1; $i <= $count; $i++) {
            $repository->createDummy();
            $progressBar->advance();
        }

        $progressBar->finish();

        $this->newLine(3);

        $this->output->success('seed success');
    }
}
