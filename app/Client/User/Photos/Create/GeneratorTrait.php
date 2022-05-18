<?php

namespace App\Client\User\Photos\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['user_photo_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['user_photo_code'];


    /**
     * generates userphoto_code for client
     *
     * @return int
     */
    public function userPhotoCodeGenerator(): int
    {
        return generateHash();
    }
}
