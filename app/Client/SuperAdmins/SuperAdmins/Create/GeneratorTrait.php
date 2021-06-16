<?php

namespace App\Client\SuperAdmins\SuperAdmins\Create;

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['super_admin_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['super_admin_code'];


	/**
	 * generates superadmin_code for client
	 *
	 * @return int
	 */
	public function superadminCodeGenerator(): int
	{
		return generateHash();
	}
}
