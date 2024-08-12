<?php

namespace App\Client\Customer\Profiles\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['customer_code', 'status'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['customer_code', 'status'];


    /**
     * generates customer_code for client
     *
     * @return int
     */
    public function customerCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * generates status for client
     *
     * @return int
     */
    public function statusCodeGenerator(): int
    {
        return 0;
    }
}
