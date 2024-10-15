<?php

namespace App\Console\Commands;

use App\Repositories\Repository;
use Illuminate\Console\Command;

class UpdateRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:role';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Role';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $roleCode = $this->ask('role code');
        $permissionCode = $this->ask('permission code');
        $httpMethod = $this->ask('http method', 'get');
        $change = $this->ask('http method new value', 0);

        $role = Repository::role()->where('role_code',$roleCode);

        $roles = $role->entity()->roles;
        $roles[$permissionCode][strtoupper($httpMethod)] = $change;

        $role->update([['roles' => $roles]]);

        $this->output->success('updating role is success');

        return Command::SUCCESS;
    }
}
