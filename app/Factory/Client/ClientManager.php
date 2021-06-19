<?php

declare(strict_types=1);

namespace App\Factory\Client;

use App\Factory\Client\Resource\ClientIdentifier\ClientIdentifier;

abstract class ClientManager
{
    /**
     * make method for client factory
     *
     * @param array $data
     * @return array
     */
    public function make(array $data = []) : array
    {
        if($this->isValidClientIdentifierResource()){
            $clientIdentifier = $this->binds['resource']['clientIdentifier'];
            return $this->clientHandler($clientIdentifier,$data);
        }

        return [];
    }

    /**
     * client handler for resource factory
     *
     * @param object $client
     * @param array $data
     * @return array
     */
    private function clientHandler(object $client,array $data = []) : array
    {
        $clientNamespace = $client->clientNamespace();

        if(class_exists($clientNamespace)){
            $clientInstance = new $clientNamespace($data);
            $clientInstance->requestMethod($client->getRequestMethod());
            $clientInstance->handle();

            return $clientInstance->getDataStream();
        }

        return [];
    }

    /**
     * checks if the clientIdentifier resource is valid
     *
     * @return bool
     */
    private function isValidClientIdentifierResource() : bool
    {
        return isset($this->binds['resource']['clientIdentifier'])
            && $this->binds['resource']['clientIdentifier'] instanceof ClientIdentifier
            && method_exists($this->binds['resource']['clientIdentifier'],'clientNamespace');
    }
}
