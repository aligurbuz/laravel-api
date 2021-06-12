<?php 

namespace App\Client\Localizations\Language\Update; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['isValidLanguageCode'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['isValidLanguageCode'];


	/**
	 * check if the language_code is valid
	 *
	 * @return null
	 */
	public function isValidLanguageCodeGenerator()
	{
		if($this->has('language_code') && !$this->repository()->exists('language_code',$this->get('language_code'))){
		    inValidCodeException('language_code',$this->get('language_code'));
		}

		return null;
	}
}
