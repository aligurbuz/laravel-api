<?php

declare(strict_types=1);

namespace App\Factory\Repository;

abstract class RepositoryManager
{
    /**
     * set resource for factory
     *
     * @param $key
     * @param $value
     * @return void
     */
    public function setResource($key,$value) : void
    {
        if(in_array($key,$this->resource)){
            $this->resource[$key] = $value;
        }
    }
}
