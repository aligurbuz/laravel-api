<?php

namespace App\Client\Localizations\Language\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['language_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['language_code'];


    /**
     * generates language_code for client
     *
     * @return int
     */
    public function languageCodeGenerator(): int
    {
        return generateHash();
    }
}
