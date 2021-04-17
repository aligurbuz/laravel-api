<?php

declare(strict_types=1);

namespace App\Packages\Client;

use Illuminate\Support\Str;

/**
 * Class ClientVariableProcess
 * @package App\Packages\Client
 */
class ClientVariableProcess
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

    /**
     * get generator process for client
     *
     * @param array $data
     * @return array
     */
    protected function generatorProcess(array $data = []) : array
    {
        $clientData = $data;

        $dontOverWriteGenerators = $this->client->dontOverWriteGenerators();

        foreach ($generators = $this->client->generators() as $generator){
            $generatorPrefix = Str::camel($generator).'Generator';
            if(in_array($generator,$generators)){
                $data[$generator] = $this->client->callMethod($generatorPrefix);
            }

            if(isset($clientData[$generator]) && !in_array($generator,$dontOverWriteGenerators)){
                $data[$generator] = $clientData[$generator];
            }
        }

        return $data;
    }
}
