<?php 

namespace App\Client\Support\Excel\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['excel_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['excel_code'];


	/**
	 * generates excel_code for client
	 *
	 * @return int
	 */
	public function excelCodeGenerator(): int
	{
		return generateHash();
	}
}
