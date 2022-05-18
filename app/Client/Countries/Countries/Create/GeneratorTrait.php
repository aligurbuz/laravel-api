<?php

namespace App\Client\Countries\Countries\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['country_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['country_code'];


    /**
     * generates country_code for client
     *
     * @return int
     */
    public function countryCodeGenerator(): int
    {
        return generateHash();
    }
}
