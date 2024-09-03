<?php

namespace App\Console\Commands\Tests;

use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class AutoManager extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:test {filter?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected array $runnableCommands = [
        'example',
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $filter = $this->argument('filter');

        if (!is_null($filter) && in_array($filter, $this->runnableCommands, true)) {
            return $this->call($filter);
        }

        foreach ($this->runnableCommands as $command) {
            $this->call($command);
        }

        return CommandAlias::SUCCESS;
    }
}
