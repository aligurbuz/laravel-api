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
    protected array $valuesAsNumericOfWeek = [0,1,2,3,4,5,6];

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
    public function handle(array $data = []) : array
    {
        foreach ($data as $valueAsNumericOfWeek => $times){
            // if key value sent by client does not fit,that throws exception
            // values numeric being days of week must be equal
            $this->exceptionValueAsNumericOfWeek($valueAsNumericOfWeek);

            // if the times value is not array
            // that throws exception for factory
            $this->exceptionIfTimesAreArray($times);

            $this->timeHandler($times);
        }

        return $this->resultSet;
    }

    /**
     * get time handler process for date factory
     *
     * @param array $time
     * @return array
     */
    public function timeHandler(array $time = []) : array
    {
        $this->resultSet = [];

        foreach ($time as $startTime => $endTime){
            $this->resultSet[] = $startTime;

            while(true){
                $startTime = Date::createFormat($startTime,'H:i')->addMinute()->toTimeString('minute');
                $this->resultSet[] = $startTime;

                if($startTime==$endTime)  break;
            }
        }

        return $this->resultSet;
    }
}
