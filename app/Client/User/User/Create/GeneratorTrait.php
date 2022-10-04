<?php

namespace App\Client\User\User\Create;

use App\Facades\Role\Role;
use App\Factory\Factory;

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
        return (Role::createAdministrator())[0]['role_code'];
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
