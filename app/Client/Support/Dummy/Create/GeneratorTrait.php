<?php

namespace App\Client\Support\Dummy\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['dummy_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['dummy_code'];


    /**
     * generates dummy_code for client
     *
     * @return int
     */
    public function dummyCodeGenerator(): int
    {
        return generateHash();
    }
}
