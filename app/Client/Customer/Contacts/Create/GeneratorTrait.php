<?php

namespace App\Client\Customer\Contacts\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = [
        'customer_contact_code'
    ];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = [
        'customer_contact_code'
    ];


    /**
     * generates customer_contact_code for client
     *
     * @return int
     */
    public function customerContactCodeGenerator(): int
    {
        return generateHash();
    }
}
