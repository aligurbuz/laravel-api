<?php

namespace App\Console\Commands;

use App\Repositories\Repository;
use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\ProgressBar;

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

        $progressBar = $this->output->createProgressBar($count);

        $progressBar->start();

        for($i=1; $i<=$count; $i++){
            $repository->createDummy();
            $progressBar->advance();
        }

        $progressBar->finish();

        $this->newLine(3);

        $this->output->success('seed success');
    }
}
