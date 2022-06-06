<?php

declare(strict_types=1);

namespace App\Services;

use Carbon\Carbon;
use DateTimeZone;

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
    public static function setTimeZone(string $timezone): static
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
        if(app()->runningInConsole()){
            return Carbon::now();
        }

        return Carbon::now(static::getTimezone());
    }

    /**
     * get day name for carbon
     *
     * @param string|null $date
     * @param null $tz
     * @return string
     */
    public static function getDayName(?string $date = null, $tz = null): string
    {
        return static::info($date, 'Y-m-d', $tz, 'dayName');
    }

    /**
     * get short day name for carbon
     *
     * @param string|null $date
     * @param null $tz
     * @return string
     */
    public static function getShortDayName(?string $date = null, $tz = null): string
    {
        return static::info($date, 'Y-m-d', $tz, 'shortDayName');
    }

    /**
     * get short day name for carbon
     *
     * @param string|null $date
     * @param null $tz
     * @return string|DateTimeZone|bool|int|null
     */
    public static function getDayOfWeek(?string $date = null, $tz = null): string|DateTimeZone|bool|int|null
    {
        return static::info($date, 'Y-m-d', $tz);
    }

    /**
     * create format for date
     *
     * @param string $format
     * @param $date
     * @param null $tz
     * @return Carbon|false
     */
    public static function createFormat($date, string $format = 'Y-m-d H:i:s', $tz = null): bool|Carbon
    {
        $tz = $tz ?? static::getTimezone();

        return Carbon::createFromFormat($format, $date, $tz);
    }

    /**
     * get day of week (as numeric) for carbon
     *
     * @param string|null $date
     * @param string $format
     * @param null $tz
     * @param string $info
     * @return string|int|bool|DateTimeZone|null
     */
    public static function info(?string $date = null, string $format = 'Y-m-d', $tz = null, string $info = 'dayOfWeek'): string|int|bool|DateTimeZone|null
    {
        return $date
            ? static::createFormat($date, $format, $tz)->{$info}
            : static::now()->{$info};
    }
}
