<?php

declare(strict_types=1);

namespace App\Services;

use Predis\Client;
use Predis\ClientInterface;

/**
 * Class Redis
 * @package App\Services
 */
class Redis
{
    /**
     * redis instance value
     *
     * @var null|ClientInterface
     */
    protected static ?ClientInterface $redisInstance = null;

    /**
     * @var array
     */
    protected static array $adapter = [];

    /**
     * @var string
     */
    protected static string $defaultAdapter = 'redis';

    /**
     * get predis client instance
     *
     * @param string|null $adapter
     * @return ClientInterface
     */
    public static function client(?string $adapter = null): ClientInterface
    {
        $redisAdapter = $adapter ?? 'default';

        if (!isset(static::$adapter[$redisAdapter])) {
            static::$adapter[$redisAdapter] = new Client(config('database.redis.' . $redisAdapter));
        }

        return static::$adapter[$redisAdapter];
    }
}
