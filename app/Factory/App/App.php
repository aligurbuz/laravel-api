<?php

declare(strict_types=1);

namespace App\Factory\App;

use App\Factory\App\Interfaces\AppInterface;

/**
 * Class App
 * @package App\Factory\App
 */
class App extends AppManager implements AppInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * it contains restaurant_code and menu_type_code global data
     *
     * @var array|string[]
     */
    protected array $resource = ['customerCode'];

    /**
     * App constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * get customer_code global data
     *
     * @return int
     */
    public function customerCode(): int
    {
        return $this->resource(__FUNCTION__)->get();
    }
}
