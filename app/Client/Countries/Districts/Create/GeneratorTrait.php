<?php 

namespace App\Client\Countries\Districts\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['district_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['district_code'];


	/**
	 * generates district_code for client
	 *
	 * @return int
	 */
	public function districtCodeGenerator(): int
	{
		return generateHash();
	}
}
