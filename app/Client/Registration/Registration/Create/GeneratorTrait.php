<?php 

namespace App\Client\Registration\Registration\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['registration_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['registration_code'];


	/**
	 * generates registration_code for client
	 *
	 * @return int
	 */
	public function registrationCodeGenerator(): int
	{
		return generateHash();
	}
}
