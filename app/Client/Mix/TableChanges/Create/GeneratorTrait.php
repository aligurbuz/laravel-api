<?php

namespace App\Client\Mix\TableChanges\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['table_change_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['table_change_code'];


    /**
     * generates tablechange_code for client
     *
     * @return int
     */
    public function tableChangeCodeGenerator(): int
    {
        return generateHash();
    }
}
