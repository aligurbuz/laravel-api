<?php

namespace App\Libs\Commands;

use App\Factory\Factory;
use App\Repositories\Repository;
use Illuminate\Console\Command;

class AdminPermissionAssigner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'give:permission {roleCode}';

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
        $roleFormatter = Factory::permission()->roleFormatter();

        $roleUpdate = Repository::role()->code($this->argument('roleCode'))->update([[
            'roles' => $roleFormatter
        ]]);

        if ($roleUpdate) {
            return Command::SUCCESS;
        }

        return Command::FAILURE;
    }
}
