<?php

namespace App\Client\User\User\Create;

use App\Factory\Factory;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $generators = ['user_code','role_code'];

    /**
     * get dont overwrite generator for client
     *
     * @var array
     */
    protected array $dontOverWriteGenerators = ['user_code','role_code'];

    /**
     * generates user_code for client
     *
     * @return int
     */
    public function userCodeGenerator() : int
    {
        return generateHash();
    }

    /**
     * generates user_code for client
     *
     * @return int
     */
    public function roleCodeGenerator() : int
    {
        return Factory::role()->createAdministrator()[0]['role_code'];
    }
}
