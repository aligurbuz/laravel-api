<?php

namespace App\Client\Password\Changes\Create;

use App\Facades\Support\Faker\Faker;
use App\Services\Date;
use Exception;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = [
        'password_change_code',
        'hash',
        'client_time'
    ];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = [
        'password_change_code',
        'hash',
        'client_time'
    ];


    /**
     * generates password change_code for client
     *
     * @return int
     */
    public function passwordChangeCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * generates password token for client
     *
     * @return string
     * @throws Exception
     */
    public function hashGenerator(): string
    {
        return (string)Faker::digitNumber();
    }

    /**
     * generates client time for client
     *
     * @return string
     * @throws Exception
     */
    public function clientTimeGenerator(): string
    {
        return Date::now();
    }
}
