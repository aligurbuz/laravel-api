<?php

declare(strict_types=1);

namespace App\Factory\Date\Resource\OpenTimeList;

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
        }

        return $data;
    }
}
