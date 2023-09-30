<?php

namespace App\Client\User\User\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $generators = ['user_code', 'role_code', 'status'];

    /**
     * get dont overwrite generator for client
     *
     * @var array
     */
    protected array $dontOverWriteGenerators = ['user_code', 'role_code', 'status'];

    /**
     * generates user_code for client
     *
     * @return int
     */
    public function userCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * generates user_code for client
     *
     * @return int
     */
    public function roleCodeGenerator(): int
    {
        return 2963074553;
    }

    /**
     * generates status for client
     *
     * @return int
     */
    public function statusGenerator(): int
    {
        return 0;
    }
}
