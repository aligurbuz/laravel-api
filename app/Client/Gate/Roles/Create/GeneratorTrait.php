<?php

namespace App\Client\Gate\Roles\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['role_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['role_code'];


    /**
     * generates role_code for client
     *
     * @return int
     */
    public function roleCodeGenerator(): int
    {
        return generateHash();
    }
}
