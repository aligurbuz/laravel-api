<?php 

namespace App\Client\Localizations\Front\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['front_lang_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['front_lang_code'];


	/**
	 * generates frontlang_code for client
	 *
	 * @return int
	 */
	public function frontLangCodeGenerator(): int
	{
		return generateHash();
	}
}
