<?php

declare(strict_types=1);

namespace App\Libs;

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
     * @return float|int
     */
    public static function diffInSeconds(string $startDate, string $finishDate): float|int
    {
        $startDate = static::createFormat($startDate);
        $finishDate = static::createFormat($finishDate);

        return $finishDate->diffInSeconds($startDate);
    }

    /**
     * checks the given time according to the criteria value within the current time.
     *
     * @param string $time
     * @param int $criteria
     * @return bool
     */
    public static function isExpireAsSecond(string $time, int $criteria = 180): bool
    {
        $diffInSeconds = static::diffInSeconds($time, static::now()->toDateTimeString());

        return ($diffInSeconds > $criteria);
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
        if ($include) {
            $list[] = $firstDate;
        }

        while (true) {
            $startDate = $startDate->addDay();
            $list[] = $startDate->toDateString();

            if ($startDate == $endDate) {
                break;
            }
        }

        if (!$include) {
            array_pop($list);
        }

        return $list;
    }

    /**
     * @param int $after
     * @param Carbon|null $day
     * @return Carbon
     */
    public static function after(int $after = 1, Carbon $day = null): Carbon
    {
        $day = $day ?: static::now();

        return static::createFormat($day->addDays($after)->toDateTimeString());
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
     * get tomorrow date
     *
     * @return Carbon
     */
    public static function tomorrow(): Carbon
    {
        return static::now()->addDays();
    }

    /**
     * get tomorrow date
     *
     * @param string $format
     * @param string $startDate
     * @param string $endDate
     * @return string
     */
    public static function fake(string $format = 'Y-m-d', string $startDate = 'now', string $endDate = '1 year'): string
    {
        return faker()->dateTimeBetween($startDate, $endDate, static::getTimezone())->format($format);
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
