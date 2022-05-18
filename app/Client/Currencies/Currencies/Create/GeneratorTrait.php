<?php

namespace App\Client\Currencies\Currencies\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['currency_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['currency_code'];


    /**
     * generates currency_code for client
     *
     * @return int
     */
    public function currencyCodeGenerator(): int
    {
        return generateHash();
    }
}
