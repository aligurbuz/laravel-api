<?php 

namespace App\Client\User\Activations\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['user_activation_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['user_activation_code'];


	/**
	 * generates useractivation_code for client
	 *
	 * @return int
	 */
	public function userActivationCodeGenerator(): int
	{
		return generateHash();
	}
}
