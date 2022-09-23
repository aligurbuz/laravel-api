<?php

namespace App\Client\Customer\Images\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['customer_image_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['customer_image_code'];


    /**
     * generates customerimage_code for client
     *
     * @return int
     */
    public function customerImageCodeGenerator(): int
    {
        return generateHash();
    }
}
