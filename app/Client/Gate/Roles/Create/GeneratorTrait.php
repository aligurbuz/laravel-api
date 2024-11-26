<?php

namespace App\Client\Gate\Roles\Create;

use App\Factory\Factory;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = [
        'role_code',
        'roles',
        'is_administrator',
        'role_app_code'
    ];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = [
        'role_code',
        'roles',
        'is_administrator',
        'role_app_code'
    ];


    /**
     * generates role_code for client
     *
     * @return int
     */
    public function roleCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * @return array
     */
    public function rolesGenerator(): array
    {
        return Factory::permission()->roleFormatter();
    }

    /**
     * @return bool
     */
    public function isAdministratorGenerator(): bool
    {
        return 0;
    }

    /**
     * @return bool
     */
    public function roleAppCodeGenerator(): bool
    {
        return false;
    }
}
