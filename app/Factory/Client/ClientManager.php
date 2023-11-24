<?php

declare(strict_types=1);

namespace App\Factory\Client;

use App\Factory\Client\Resource\ClientIdentifier\ClientIdentifier;
use App\Libs\AppContainer;

abstract class ClientManager
{
    /**
     * make method for client factory
     *
     * @param array $data
     * @param bool $container
     * @return array
     */
    public function make(array $data = [], bool $container = false): array
    {
        if ($this->isValidClientIdentifierResource()) {
            $clientIdentifier = $this->binds['resource']['clientIdentifier'];
            return $this->clientHandler($clientIdentifier, $data, $container);
        }

        return [];
    }

    /**
     * checks if the clientIdentifier resource is valid
     *
     * @return bool
     */
    private function isValidClientIdentifierResource(): bool
    {
        return isset($this->binds['resource']['clientIdentifier'])
            && $this->binds['resource']['clientIdentifier'] instanceof ClientIdentifier
            && method_exists($this->binds['resource']['clientIdentifier'], 'clientNamespace');
    }

    /**
     * client handler for resource factory
     *
     * @param object $clientIdentifier
     * @param array $data
     * @param bool $container
     * @return array
     */
    private function clientHandler(object $clientIdentifier, array $data = [], bool $container = false): array
    {
        $clientNamespace = $clientIdentifier->clientNamespace();

        if (class_exists($clientNamespace)) {
            $clientInstance = new $clientNamespace($data);

            if ($container) {
                AppContainer::terminate('crRepositoryInstance');
                AppContainer::set('crRepositoryInstance', $clientInstance->repository());
            }

            $clientInstance->requestMethod($clientIdentifier->getRequestMethod());
            $clientInstance->handle();
            return $clientInstance->getDataStream();
        }

        return [];
    }
}
