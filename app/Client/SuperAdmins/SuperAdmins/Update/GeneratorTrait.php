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
		if($this->has('superadmin_code') && !$this->repository()->exists('superadmin_code',$this->get('superadmin_code'))){
		    inValidCodeException('superadmin_code',$this->get('superadmin_code'));
		}

		return null;
	}
}
