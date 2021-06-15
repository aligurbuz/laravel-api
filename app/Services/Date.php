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
     * @var string
     */
    protected string $timezone = 'Europe/Istanbul';

    /**
     * Date constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * get now method for carbon
     *
     * @return Carbon
     */
    public static function now(): Carbon
    {
        return Carbon::now((new self())->timezone);
    }

    /**
     * create format for date
     *
     * @param $format
     * @param $data
     * @param null $tz
     * @return Carbon|false
     */
    public static function createFormat($data,$format = 'Y-m-d H:i:s',$tz = null): bool|Carbon
    {
        $tz = is_null($tz) ? (new self())->timezone : $tz;

        return Carbon::createFromFormat($format,$data,$tz);
    }
}
