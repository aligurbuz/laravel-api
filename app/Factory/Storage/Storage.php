<?php

namespace App\Factory\Storage;

use App\Factory\Storage\Interfaces\StorageInterface;

/**
 * Class Storage
 * @package App\Factory\Storage
 */
class Storage extends StorageManager implements StorageInterface
{
    /**
     * @var array
     */
    protected array $binds = [];

    /**
     * DatabaseLogger constructor.
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * puts aws s3 storage
     *
     * @return array
     */
    public function put(): array
    {
        $list = [];

        foreach ($this->binds as $input => $data){
            $list[$input] = $data->getClientOriginalName();
        }

        return $list;
    }
}
