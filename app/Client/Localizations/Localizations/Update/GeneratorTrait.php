<?php 

namespace App\Client\Localizations\Localizations\Update; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['isValidLocalizationCode'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['isValidLocalizationCode'];


	/**
	 * check if the localization_code is valid
	 *
	 * @return null
	 */
	public function isValidLocalizationCodeGenerator()
	{
		if($this->has('localization_code') && !$this->repository()->exists('localization_code',$this->get('localization_code'))){
		    inValidCodeException('localization_code',$this->get('localization_code'));
		}

		return null;
	}
}
