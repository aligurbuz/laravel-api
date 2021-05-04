<?php

namespace App\Client\User\Comment\Create;

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['test'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['test'];

	public function testGenerator()
    {
        return null;
    }
}
