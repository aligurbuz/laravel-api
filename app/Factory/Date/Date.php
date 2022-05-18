<?php

declare(strict_types=1);

namespace App\Factory\Date;

use App\Factory\Date\Interfaces\DateInterface;
use App\Services\Date as DateProcess;

/**
 * Class Date
 * @package App\Factory\Date
 */
class Date extends DateManager implements DateInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var array
     */
    protected array $resource = ['openTimeList'];

    /**
     * @var int
     */
    protected int $dayOfWeek = 0;

    /**
     * Date constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->dayOfWeek = DateProcess::now()->dayOfWeek;
    }

    /**
     * returns open time list for the given array data
     *
     * @param array $data
     * @return array
     */
    public function openTimeList(array $data = []): array
    {
        return ($this->getResource(__FUNCTION__))->handle($data);
    }

    /**
     * checks if the given time is valid for open time list
     *
     * @param array $openTimeList
     * @param string|null $time
     * @param int|null $dayKey
     * @return bool
     */
    public function isOpen(array $openTimeList = [], ?string $time = null, ?int $dayKey = null): bool
    {
        $now = DateProcess::now();
        $time = $time ?? $now->toTimeString('minute');
        $openTimeListForDay = $openTimeList[($dayKey ?? $this->dayOfWeek)] ?? [];

        if (count($openTimeListForDay)) {
            return in_array($time, $openTimeListForDay, true);
        }

        return true;
    }
}
