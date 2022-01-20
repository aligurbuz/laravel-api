<?php

declare(strict_types=1);

namespace App\Services;

use Carbon\Carbon;

/**
 * Class DateManager
 * @package App\Services
 */
class Date
{
    /**
     * @var ?string
     */
    protected static ?string $timezone = null;

    /**
     * Date constructor.
     * @param string|null $timezone
     */
    public function __construct(?string $timezone = null)
    {
        static::$timezone = $timezone ?? timezone();
    }

    /**
     * set timezone for carbon
     *
     * @param string $timezone
     * @return static
     */
    public static function setTimeZone(string $timezone) : static
    {
        return new static($timezone);
    }

    /**
     * get timezone for carbon
     *
     * @return string|null
     */
    public static function getTimezone(): ?string
    {
        return static::$timezone ?? timezone();
    }

    /**
     * get now method for carbon
     *
     * @return Carbon
     */
    public static function now(): Carbon
    {
        return Carbon::now(static::getTimezone());
    }

    /**
     * get day of week (as numeric) for carbon
     *
     * @param string|null $date
     * @param string $format
     * @param null $tz
     * @return int
     */
    public static function getDayOfWeek(?string $date= null, string $format = 'Y-m-d', $tz = null): int
    {
        return $date
            ? static::createFormat($date,$format,$tz)->dayOfWeek
            : static::now()->dayOfWeek;
    }

    /**
     * create format for date
     *
     * @param string $format
     * @param $data
     * @param null $tz
     * @return Carbon|false
     */
    public static function createFormat($data, string $format = 'Y-m-d H:i:s', $tz = null): bool|Carbon
    {
        $tz = $tz ?? static::getTimezone();

        return Carbon::createFromFormat($format,$data,$tz);
    }
}
