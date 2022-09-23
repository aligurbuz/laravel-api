<?php

declare(strict_types=1);

namespace App\Services;

/**
 * Class Git
 * @package App\Services
 */
class Git
{
    /**
     * @param $commitName
     * @return void
     */
    public function commit($commitName): void
    {
        exec('git add --all');
        exec('git commit -m \'' . $commitName . '\'');
    }
}
