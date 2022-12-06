<?php 

namespace App\Client\Password\Changes\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['password_change_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['password_change_code'];


	/**
	 * generates passwordchange_code for client
	 *
	 * @return int
	 */
	public function passwordChangeCodeGenerator(): int
	{
		return generateHash();
	}
}
