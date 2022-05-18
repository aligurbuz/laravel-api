<?php

declare(strict_types=1);

namespace App\Factory\Localization;

use App\Factory\Localization\Interfaces\LocalizationInterface;
use App\Repositories\Repository;

/**
 * Class Localization
 * @package App\Factory\Localization
 */
class Localization extends LocalizationManager implements LocalizationInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var int
     */
    protected int $code = 0;

    /**
     * @var mixed
     */
    protected mixed $default;

    /**
     * @var array|null
     */
    protected static ?array $repository = null;

    /**
     * Localization constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;

        $this->code = $this->binds[0] ?? 0;
        $this->default = ['default' => ($this->binds[1] ?? null)];
    }

    /**
     * get localization data for factory
     *
     * @return array
     */
    public function get(): array
    {
        if (!isset(static::$repository[$this->code])) {
            static::$repository[$this->code] = Repository::localization()->localizedCode($this->code)->getRepository();
        }

        return static::$repository[$this->code];
    }

    /**
     * get localization data value for factory
     *
     * @return object
     */
    public function getValues(): object
    {
        $data = $this->get();

        return objectValue(($data[0]['values'] ?? $this->default));
    }
}
