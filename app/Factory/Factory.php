<?php

declare(strict_types=1);

namespace App\Factory;

use App\Factory\ApiKey\Interfaces\ApiKeyInterface;
use App\Factory\Cache\Interfaces\CacheInterface;
use App\Factory\Client\Interfaces\ClientInterface;
use App\Factory\Code\Interfaces\CodeInterface;
use App\Factory\Date\Interfaces\DateInterface;
use App\Factory\Localization\Interfaces\LocalizationInterface;
use App\Factory\Logger\Interfaces\LoggerInterface;
use App\Factory\Notify\Interfaces\NotifyInterface;
use App\Factory\Permission\Interfaces\PermissionInterface;
use App\Factory\Request\Interfaces\RequestInterface;
use App\Factory\Storage\Interfaces\StorageInterface;

/**
 * Class Factory
 * @method static LoggerInterface logger($arguments = null)
 * @method static StorageInterface storage($arguments = null)
 * @method static NotifyInterface notify($arguments = null)
 * @method static CacheInterface cache($arguments = null)
 * @method static CodeInterface code($arguments = null)
 * @method static LocalizationInterface localization($arguments = null)
 * @method static ClientInterface client($arguments = null)
 * @method static PermissionInterface permission($arguments = null)
 * @method static DateInterface date($arguments = null)
 * @method static ApiKeyInterface apiKey($arguments = null)
 * @method static RequestInterface request($arguments = null)
 * @package App\Factory
 */
class Factory extends FactoryManager
{
    /**
     * #this is adapter property for factory model
     * get the called class for factory
     *
     * @var array
     */
    protected static array $adapters = [
        'Logger' => 'DatabaseLogger',
        'Notify' => 'Slack',
        'Cache' => 'Redis'
    ];

    /**
     * binds to class as parameters.
     *
     * @return void
     */
    public static function bindings(): void
    {
        static::bind('Storage', ['files' => request()->allFiles()]);
    }
}
