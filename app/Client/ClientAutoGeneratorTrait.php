<?php

namespace App\Client;

trait ClientAutoGeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $autoGenerators = [];

    /**
     * get dont overwrite generator for client
     *
     * @var array
     */
    protected array $dontOverWriteAutoGenerators = [];
}
