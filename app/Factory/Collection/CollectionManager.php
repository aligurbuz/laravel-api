<?php

declare(strict_types=1);

namespace App\Factory\Collection;

abstract class CollectionManager
{
    /**
     * It is a method for adding or subtraction the double elements of two given arrays.
     *
     * @param array $first
     * @param array $last
     * @param string $operator
     * @return array
     */
    public function additionSubtractionProcess(array $first = [], array $last = [], $operator = 'addition') : array
    {
        $list = [];

        foreach ($first as $firstKey => $firstValue){
            if(isset($last[$firstKey])){
                $list[$firstKey] = $this->{$operator}($firstValue,$last[$firstKey]);
            }
            else{
                $list[$firstKey] = $this->{$operator}($firstValue,1);
            }
        }

        return $list;
    }

    /**
     * Additions two given values as a double.
     *
     * @param $key
     * @param $value
     * @return float
     */
    protected function addition($key, $value) : float
    {
        return (float)$key + (float)$value;
    }

    /**
     * Subtractions two given values as a double.
     *
     * @param $key
     * @param $value
     * @return float
     */
    protected function subtraction($key, $value) : float
    {
        return (float)$key - (float)$value;
    }
}
