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
     * Determines how many seconds are between two dates.
     *
     * @param string $startDate
     * @param string $finishDate
     * @param string $format
     * @return float|int
     */
    public static function diffInSeconds(string $startDate, string $finishDate, string $format = 'Y-m-d H:i:s'): float|int
    {
        $startDate = static::createFormat($startDate,$format);
        $finishDate = static::createFormat($finishDate,$format);

        return $finishDate->diffInSeconds($startDate);
    }

    /**
     * Lists all dates between two dates.
     *
     * @param string $startDate
     * @param string $endDate
     * @param bool $include
     * @return array
     */
    public static function findDaysBetweenDates(string $startDate, string $endDate, bool $include = true): array
    {
        $firstDate = $startDate;
        $startDate = static::createFormat($startDate, 'Y-m-d');
        $endDate = static::createFormat($endDate, 'Y-m-d');

        $list = [];
        if($include) $list[] = $firstDate;

        while (true) {
            $startDate = $startDate->addDay();
            $list[] = $startDate->toDateString();

            if ($startDate == $endDate) break;
        }

        if(!$include) array_pop($list);

        return $list;
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
     * @return Carbon
     */
    public static function now(): Carbon
    {
        return Carbon::now(static::getTimezone());
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
}
