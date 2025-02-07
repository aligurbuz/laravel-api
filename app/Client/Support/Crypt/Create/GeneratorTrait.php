<?php

namespace App\Client\Support\Crypt\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['crypt_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['crypt_code'];


    /**
     * generates crypt_code for client
     *
     * @return int
     */
    public function cryptCodeGenerator(): int
    {
        return generateHash();
    }
}
