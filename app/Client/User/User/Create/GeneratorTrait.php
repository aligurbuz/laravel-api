<?php

namespace App\Client\User\User\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $generators = ['user_code'];

    /**
     * get dont overwrite generator for client
     *
     * @var array
     */
    protected array $dontOverWriteGenerators = ['user_code'];

    /**
     * generates user_code for client
     *
     * @return int
     */
    public function userCodeGenerator() : int
    {
        return generateHash();
    }
}
