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
     * @return mixed
     * @see Localization::getValues()
     */
    public function getValues() : mixed;
}
