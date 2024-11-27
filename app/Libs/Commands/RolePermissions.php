<?php

namespace App\Libs\Commands;

use App\Repositories\Repository;
use Illuminate\Console\Command;

class RolePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:permissions {roleCode}';

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
        $roleCode = $this->argument('roleCode');

        $role = Repository::role()->where('role_code', $roleCode)->entity();

        $list = [];
        $counter = 0;

        foreach ($role->roles as $permissionCode => $permissions) {
            $permission = Repository::permission()->where('permission_code', $permissionCode)->entity();

            $list[$counter]['role_code'] = $roleCode;
            $list[$counter]['role_name'] = $role->role_name;
            $list[$counter]['permission_code'] = $permissionCode;
            $list[$counter]['endpoint'] = $permission->endpoint;
            $list[$counter]['http_get'] = $permissions['GET'];
            $list[$counter]['http_post'] = $permissions['POST'];
            $list[$counter]['http_put'] = $permissions['PUT'];
            $list[$counter]['http_delete'] = $permissions['DELETE'];


            ++$counter;

        }

        $this->table(
            [
                'role_code',
                'role_name',
                'permission_code',
                'endpoint',
                'http_get',
                'http_post',
                'http_put',
                'http_delete'
            ],
            $list,
            'box-double');

        return Command::SUCCESS;
    }
}
