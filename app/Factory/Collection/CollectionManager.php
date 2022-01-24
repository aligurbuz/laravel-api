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
    public function additionSubtractionProcess(array $first = [], array $last = [], string $operator = 'addition') : array
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
     * Shows the difference between the two arrays.
     *
     * @param array $first
     * @param array $second
     * @param string|null $criteria
     * @return array
     */
    protected function differentProcess(array $first = [],array $second = [],?string $criteria = null) : array
    {
        return [];
    }

    /**
     * Additions two given values as a double.
     *
     * @param $key
     * @param $increment
     * @return float
     */
    protected function addition($key, $increment) : float
    {
        return (float)$key + (float)$increment;
    }

    /**
     * Subtractions two given values as a double.
     *
     * @param $key
     * @param $decrement
     * @return float
     */
    protected function subtraction($key, $decrement) : float
    {
        return (float)$key - (float)$decrement;
    }
}
