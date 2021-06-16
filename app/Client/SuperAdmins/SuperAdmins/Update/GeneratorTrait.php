<?php

namespace App\Client\SuperAdmins\SuperAdmins\Update;

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['isValidSuperAdminCode'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['isValidSuperAdminCode'];


	/**
	 * check if the superadmin_code is valid
	 *
	 * @return null
	 */
	public function isValidSuperAdminCodeGenerator()
	{
		if($this->has('super_admin_code') && !$this->repository()->exists('super_admin_code',$this->get('super_admin_code'))){
		    inValidCodeException('super_admin_code',$this->get('super_admin_code'));
		}

		return null;
	}
}
