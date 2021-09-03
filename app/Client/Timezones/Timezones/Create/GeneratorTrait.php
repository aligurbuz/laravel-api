<?php 

namespace App\Client\Timezones\Timezones\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['timezone_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['timezone_code'];


	/**
	 * generates timezone_code for client
	 *
	 * @return int
	 */
	public function timezoneCodeGenerator(): int
	{
		return generateHash();
	}
}
