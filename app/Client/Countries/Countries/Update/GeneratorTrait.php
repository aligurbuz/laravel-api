<?php 

namespace App\Client\Countries\Countries\Update; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['isValidCountryCode'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['isValidCountryCode'];


	/**
	 * check if the country_code is valid
	 *
	 * @return null
	 */
	public function isValidCountryCodeGenerator()
	{
		if($this->has('country_code') && !$this->repository()->exists('country_code',$this->get('country_code'))){
		    inValidCodeException('country_code',$this->get('country_code'));
		}

		return null;
	}
}
