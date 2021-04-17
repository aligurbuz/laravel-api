<?php

declare(strict_types=1);

namespace App\Packages\Client;

/**
 * Class ClientVariableProcess
 * @package App\Packages\Client
 */
trait ClientVariableTraitProcess
{
    /**
     * get variable process
     *
     * @param array $data
     * @return array
     */
    protected function variableProcess(array $data = []): array
    {
        $list = [];

        foreach ($data as $key => $value){
            if(property_exists($this->client,$key)){
                $this->client->setProperty($key,$value);

                if(method_exists($this->client,$key)){
                    $list[$key] = $this->client->callMethod($key);
                }
            }
            else{
                $list[$key] = $value;
            }
        }

        return $list;
    }
}
