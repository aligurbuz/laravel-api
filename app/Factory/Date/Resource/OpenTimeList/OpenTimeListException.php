<?php

declare(strict_types=1);

namespace App\Factory\Date\Resource\OpenTimeList;

use App\Exceptions\Exception;

trait OpenTimeListException
{
    /**
     * get exception value as numeric of week
     *
     * @param $value
     * @return object|null
     */
    public function exceptionValueAsNumericOfWeek($value) : ?object
    {
        if(!in_array($value,$this->valuesAsNumericOfWeek,true)){
            return Exception::customException('value numeric exception');
        }

        return null;
    }

    /**
     * get exception value as numeric of week
     *
     * @param $value
     * @return object|null
     */
    public function exceptionIfTimesAreArray($value) : ?object
    {
        if(!is_array($value)){
            return Exception::customException('time exception');
        }

        return null;
    }
}
