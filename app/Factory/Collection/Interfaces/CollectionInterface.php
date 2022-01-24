<?php

declare(strict_types=1);

namespace App\Factory\Collection\Interfaces;

use App\Factory\Collection\Collection;

/**
 * Interface CollectionInterface
 * @package App\Factory\Collection\Interfaces
 */
interface CollectionInterface
{
    /**
     * @param array $first
     * @param array $last
     * @return array
     * @see Collection::additionDoubleElementsOfArrays()
     */
    public function additionDoubleElementsOfArrays(array $first = [],array $last  = []) : array;

    /**
     * @param array $first
     * @param array $last
     * @return array
     * @see Collection::subtractionDoubleElementsOfArrays()
     */
    public function subtractionDoubleElementsOfArrays(array $first = [], array $last  = []) : array;

    /**
     * @param array $first
     * @param array $second
     * @param string|null $criteria
     * @return array
     * @see Collection::different()
     */
    public function different(array $first = [], array $second = [], ?string $criteria = null) : array;
}
