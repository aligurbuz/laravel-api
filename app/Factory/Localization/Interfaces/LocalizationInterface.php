<?php

declare(strict_types=1);

namespace App\Factory\Localization\Interfaces;

use App\Factory\Localization\Localization;

/**
 * Interface LocalizationInterface
 * @package App\Factory\Localization\Interfaces
 */
interface LocalizationInterface
{
    /**
     * @return array
     * @see Localization::get()
     */
    public function get() : array;

    /**
     * @return object
     * @see Localization::getValues()
     */
    public function getValues() : object;
}
