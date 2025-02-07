<?php 

namespace App\Client\Store\Items\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['item_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['item_code'];


	/**
	 * generates item_code for client
	 *
	 * @return int
	 */
	public function itemCodeGenerator(): int
	{
		return generateHash();
	}
}
