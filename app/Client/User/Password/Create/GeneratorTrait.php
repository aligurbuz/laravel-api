<?php 

namespace App\Client\User\Password\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['user_password_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['user_password_code'];


	/**
	 * generates userpassword_code for client
	 *
	 * @return int
	 */
	public function userPasswordCodeGenerator(): int
	{
		return generateHash();
	}
}
