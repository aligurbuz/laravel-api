<?php

namespace App\Client\Password\Changes\Update;

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['is_deleted'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['is_deleted'];

    /**
     * is deleted generator for client
     *
     * @return bool
     */
    public function isDeletedGenerator() : bool
    {
        return true;
    }
}
