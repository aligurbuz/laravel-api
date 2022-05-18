<?php

declare(strict_types=1);

namespace App\Factory\Client\Resource\ClientIdentifier;

use Illuminate\Support\Str;

/**
 * Class ClientIdentifier
 * @package App\Factory\Client\Resource\ClientIdentifier
 */
class ClientIdentifier
{
    /**
     * @var array
     */
    protected array $binds = [];

    /**
     * @var string|null
     */
    protected ?string $client = null;

    /**
     * @var string
     */
    protected string $requestMethod = 'GET';

    /**
     * ClientIdentifier constructor.
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->client = $this->binds['client'] ?? 'none.none.none';
    }

    /**
     * get client namespace for resource factory
     *
     * @return string
     */
    public function clientNamespace(): string
    {
        $partitions = $this->clientPartitions();

        $dir = $partitions['dir'] ?? null;
        $client = $partitions['client'] ?? null;
        $method = $partitions['method'] ?? null;
        $clientName = $method . 'Client';

        return 'App\Client\\' . $dir . '\\' . $client . '\\' . $method . '\\' . $clientName;
    }

    /**
     * get request method for resource factory
     *
     * @return string
     */
    public function getRequestMethod(): string
    {
        return $this->requestMethod;
    }

    /**
     * @return string[]
     */
    private function clientPartitions(): array
    {
        $clientPartitions = $this->client();

        if (count($clientPartitions) == 3) {
            [$dir, $client, $method] = $clientPartitions;
            return $this->setClientPartitions($dir, $client, $method);
        }

        return $this->setClientPartitions();
    }

    /**
     * get client partitions resource factory
     *
     * @param ?string $dir
     * @param ?string $client
     * @param ?string $method
     * @return array
     */
    private function setClientPartitions(?string $dir = null, ?string $client = null, ?string $method = null): array
    {
        return [
            'dir' => $dir ?? 'none',
            'client' => $client ?? 'none',
            'method' => $this->setRequestMethod($method) ?? 'none',
        ];
    }

    /**
     * get client map for resource factory
     *
     * @return array
     */
    private function client(): array
    {
        return array_map(
            function ($value) {
                return Str::ucfirst($value);
            }
            , explode('.', $this->client)
        );
    }

    /**
     * set request method for resource factory
     *
     * @param $method
     * @return string
     */
    private function setRequestMethod(?string $method): string
    {
        if ($method == 'Create') $this->requestMethod = 'POST';
        if ($method == 'Update') $this->requestMethod = 'PUT';

        return $method;
    }
}
