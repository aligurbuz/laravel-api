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
}
