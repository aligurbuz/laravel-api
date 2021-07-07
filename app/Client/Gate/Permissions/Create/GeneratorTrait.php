<?php 

namespace App\Client\Gate\Permissions\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['permission_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['permission_code'];


	/**
	 * generates permission_code for client
	 *
	 * @return int
	 */
	public function permissionCodeGenerator(): int
	{
		return generateHash();
	}
}
