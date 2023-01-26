<?php

declare(strict_types=1);

namespace App\Factory;

use App\Factory\ApiKey\Interfaces\ApiKeyInterface;
use App\Factory\App\Interfaces\AppInterface;
use App\Factory\Cache\Interfaces\CacheInterface;
use App\Factory\Calculator\Interfaces\CalculatorInterface;
use App\Factory\Client\Interfaces\ClientInterface;
use App\Factory\Code\Interfaces\CodeInterface;
use App\Factory\Collection\Interfaces\CollectionInterface;
use App\Factory\Date\Interfaces\DateInterface;
use App\Factory\Excel\Interfaces\ExcelInterface;
use App\Factory\Http\Interfaces\HttpInterface;
use App\Factory\Localization\Interfaces\LocalizationInterface;
use App\Factory\Logger\Interfaces\LoggerInterface;
use App\Factory\Money\Interfaces\MoneyInterface;
use App\Factory\Notify\Interfaces\NotifyInterface;
use App\Factory\Payment\Interfaces\PaymentInterface;
use App\Factory\Pdf\Interfaces\PdfInterface;
use App\Factory\Permission\Interfaces\PermissionInterface;
use App\Factory\Search\Interfaces\SearchInterface;
use App\Factory\Sms\Interfaces\SmsInterface;
use App\Factory\Socket\Interfaces\SocketInterface;
use App\Factory\Storage\Interfaces\StorageInterface;
use App\Factory\Tax\Interfaces\TaxInterface;

/**
 * Class Factory
 * @method static LoggerInterface logger($arguments = null)
 * @method static StorageInterface storage($arguments = null)
 * @method static NotifyInterface notify($arguments = null)
 * @method static CacheInterface cache($arguments = null)
 * @method static CodeInterface code($arguments = null)
 * @method static LocalizationInterface localization($arguments = null)
 * @method static CollectionInterface collection($arguments = null)
 * @method static ClientInterface client($arguments = null)
 * @method static PermissionInterface permission($arguments = null)
 * @method static SearchInterface search($arguments = null)
 * @method static DateInterface date($arguments = null)
 * @method static ApiKeyInterface apiKey($arguments = null)
 * @method static SmsInterface sms($arguments = null)
 * @method static MoneyInterface money($arguments = null)
 * @method static TaxInterface tax($arguments = null)
 * @method static ExcelInterface excel($arguments = null)
 * @method static HttpInterface http($arguments = null)
 * @method static PaymentInterface payment($arguments = null)
 * @method static PdfInterface pdf($arguments = null)
 * @method static SocketInterface socket($arguments = null)
 * @method static AppInterface app($arguments = null)
 * @method static CalculatorInterface calculator($arguments = null)
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
        'Cache' => 'Redis',
        'Search' => 'ElasticSearch',
        'Sms' => 'Twilio',
    ];

    /**
     * binds to class as parameters.
     *
     * @return void
     */
    public static function bindings(): void
    {
        static::bind('Storage', ['files' => request()?->allFiles()]);
    }
}
