<?php

declare(strict_types=1);

namespace App\Factory\Date\Resource\OpenTimeList;

use App\Services\Date;

class OpenTimeList
{
    use OpenTimeListException;

    /**
     * @var array
     */
    protected array $binds = [];

    /**
     * @var array
     */
    protected array $valuesAsNumericOfWeek = [0, 1, 2, 3, 4, 5, 6];

    /**
     * @var array
     */
    protected array $resultSet = [];

    /**
     * Html constructor.
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * it handles openTimeList process for date factory
     *
     * @param array $data
     * @return array
     */
    public function handle(array $data = []): array
    {
        $this->resultSet = [];

        foreach ($data as $valueAsNumericOfWeek => $times) {
            // if key value sent by client does not fit,that throws exception
            // values numeric being days of week must be equal
            $this->exceptionValueAsNumericOfWeek($valueAsNumericOfWeek);

            // if the times value is not array
            // that throws exception for factory
            $this->exceptionIfTimesAreArray($times);

            // this method explicitly converts
            // the given time array to the time list.
            $this->timeHandler((int)$valueAsNumericOfWeek, $times);
        }

        return $this->resultSet;
    }

    /**
     * get time handler process for date factory
     *
     * @param int $dayKey
     * @param array $time
     * @return array
     */
    protected function timeHandler(int $dayKey = 0, array $time = []): array
    {
        foreach ($time as $startTime => $endTime) {
            $this->resultSet[$dayKey][] = $startTime;

            while (true) {
                $startTime = Date::createFormat($startTime, 'H:i')->addMinute()->toTimeString('minute');
                $this->resultSet[$dayKey][] = $startTime;

                if ($startTime == $endTime) break;
            }
        }

        return $this->resultSet;
    }
}
