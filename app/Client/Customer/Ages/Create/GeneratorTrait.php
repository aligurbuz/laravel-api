<?php

namespace App\Client\Customer\Ages\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['customer_age_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['customer_age_code'];


    /**
     * generates customerage_code for client
     *
     * @return int
     */
    public function customerAgeCodeGenerator(): int
    {
        return generateHash();
    }
}
