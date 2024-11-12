<?php

namespace App\Libs\Commands;

use Illuminate\Console\Command;

class Role extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles';

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
        $columns = ['role_code','role_name','is_administrator','status','is_deleted'];
        $this->table(
            $columns,
            \App\Models\Role::query()->select($columns)->get(),'box-double'
        );

        return Command::SUCCESS;
    }
}
