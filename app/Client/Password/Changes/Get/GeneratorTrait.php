<?php

namespace App\Client\Password\Changes\Get;

use App\Exceptions\Exception;

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = [];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = [];
}
