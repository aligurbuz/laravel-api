<?php

declare(strict_types=1);

namespace App\Factory\Permission;

use App\Repositories\Repository;
use App\Factory\Permission\Interfaces\PermissionInterface;

/**
 * Class Permission
 * @package App\Factory\Permission
 */
class Permission extends PermissionManager implements PermissionInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Permission constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * get all permission for factory
     *
     * @return array
     */
	public function get() : array
    {
        return Repository::permission()->all();
    }

    /**
     * checks if the permission is valid for route
     *
     * @return bool
     */
    public function checkEndpoint() : bool
    {
        $role       = Repository::role()->user()->getRepository();
        $permission = Repository::permission()->endpoint()->getRepository();

        return $this->permissionHandler($role,$permission);
    }

    /**
     * get role formatter for factory
     *
     * @return array
     */
    public function roleFormatter() : array
    {
        $permissions = $this->get();

        $list = [];

        foreach ($permissions as $permission){
            $list[($permission['permission_code'] ?? 0)] = ['GET' => 1,'POST' => 1,'PUT' => 1];
        }

        return $list;
    }
}
