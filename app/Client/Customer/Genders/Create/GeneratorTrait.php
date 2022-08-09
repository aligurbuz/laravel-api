<?php 

namespace App\Client\Customer\Genders\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['customer_gender_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['customer_gender_code'];


	/**
	 * generates customergender_code for client
	 *
	 * @return int
	 */
	public function customerGenderCodeGenerator(): int
	{
		return generateHash();
	}
}
