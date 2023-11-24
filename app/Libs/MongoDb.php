<?php

declare(strict_types=1);

namespace App\Libs;

use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Command;
use MongoDB\Driver\Exception\Exception;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Server;

/**
 * Class MongoDb
 * @package App\Services
 */
class MongoDb
{
    /**
     * @var null|Manager
     */
    protected static ?Manager $connection = null;

    /**
     * @var mixed
     */
    protected mixed $port;

    /**
     * @var string|int|mixed
     */
    protected string $host = 'localhost';

    /**
     * MongoDb constructor.
     */
    public function __construct()
    {
        $config = config('database.mongoDb.default');

        $this->port = $config['mongoDbPort'] ?? 0;
        $this->host = $config['mongoDbHost'] ?? $this->host;
    }

    /**
     * get connection for mongoDb
     *
     * @return self
     */
    public static function connection(): self
    {
        $self = new self;

        if (is_null(static::$connection)) {
            static::$connection = new Manager('mongodb://' . $self->host . ':' . $self->port);
        }

        return new self();
    }

    /**
     * get servers for mongoDb
     *
     * @return Server[]
     */
    public function getServers(): array
    {
        return static::$connection->getServers();
    }

    /**
     * write collection data in mongoDb
     *
     * @param $collection
     * @param array $data
     * @return object
     */
    public function write($collection, array $data = []): object
    {
        $bulkWriteInstance = (new BulkWrite());
        $bulkWriteInstance->insert($data);

        return static::$connection->executeBulkWrite($collection . '.collection', $bulkWriteInstance);
    }

    /**
     * check it the connection is success for mongoDb
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        $command = new Command(['ping' => 1]);

        try {
            static::$connection->executeCommand('test', $command);
        } catch (Exception) {
            return false;
        }

        return true;
    }
}
