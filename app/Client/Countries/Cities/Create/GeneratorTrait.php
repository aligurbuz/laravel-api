<?php

namespace App\Client\Countries\Cities\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['city_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['city_code'];


    /**
     * generates city_code for client
     *
     * @return int
     */
    public function cityCodeGenerator(): int
    {
        return generateHash();
    }
}
