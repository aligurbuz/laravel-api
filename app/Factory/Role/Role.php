<?php

declare(strict_types=1);

namespace App\Factory\Role;

use App\Factory\Factory;
use App\Repositories\Repository;
use App\Factory\Role\Interfaces\RoleInterface;

/**
 * Class Role
 * @package App\Factory\Role
 */
class Role extends RoleManager implements RoleInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Role constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * creates role for factory
     *
     * @return array
     */
	public function createAdministrator() : array
    {
        $clientRequest = cR('gate.roles.create',[[
            'role_app_code' => time(),
            'role_name' => 'Administrator',
            'is_administrator' => 1,
            'roles' => Factory::permission()->roleFormatter()
        ]],null,false);

        return Repository::role()->create([$clientRequest]);
    }
}
