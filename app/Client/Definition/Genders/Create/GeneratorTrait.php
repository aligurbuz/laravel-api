<?php

namespace App\Client\Definition\Genders\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['gender_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['gender_code'];


    /**
     * generates gender_code for client
     *
     * @return int
     */
    public function genderCodeGenerator(): int
    {
        return generateHash();
    }
}
