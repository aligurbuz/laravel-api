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
            $camelCaseForKey = Str::camel($key);
            if(property_exists($this->client,$camelCaseForKey)){
                $this->client->setProperty($key,$value);

                if(method_exists($this->client,$camelCaseForKey)){
                    $list[$key] = $callMethod = $this->client->callMethod($camelCaseForKey);
                    $this->client->putDataStream($key,$callMethod);
                }
            }
            else{
                $list[$key] = $value;
                $this->client->putDataStream($key,$value);
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
                $callMethod = $this->client->callMethod($generatorPrefix);
                if(!is_null($callMethod)){
                    $data[$generator] = $callMethod;
                }
            }

            if(isset($clientData[$generator]) && !in_array($generator,$dontOverWriteGenerators)){
                $data[$generator] = $clientData[$generator];
            }
        }

        return $data;
    }

    /**
     * get generator process for client
     *
     * @param array $data
     * @return array
     */
    protected function autoGeneratorProcess(array $data = []) : array
    {
        $clientData = $data;

        $dontOverWriteAutoGenerators = $this->client->dontOverWriteAutoGenerators();

        foreach ($generators = $this->client->autoGenerators() as $generator){
            $generatorPrefix = Str::camel($generator).'AutoGenerator';
            if(in_array($generator,$generators)){
                $callMethod = $this->client->callMethod($generatorPrefix);
                if(!is_null($callMethod)){
                    $data[$generator] = $callMethod;
                }
            }

            if(isset($clientData[$generator]) && !in_array($generator,$dontOverWriteAutoGenerators)){
                $data[$generator] = $clientData[$generator];
            }
        }

        return $data;
    }
}
