<?php

namespace App\Factory\Storage;

use Exception;
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
     * @var object
     */
    protected object $client;

    /**
     * DatabaseLogger constructor.
     *
     * @param array $binds
     *
     * @throws Exception
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->client = $this->binds['client'] ?? new class{};

        if(!method_exists($this->client,'ensureColumnExists')){
            throw new Exception('client bind is invalid');
        }
    }

    /**
     * puts aws s3 storage
     *
     * @return array
     */
    public function put(): array
    {
        $list = [];

        foreach (($this->binds['files'] ?? []) as $input => $data){
            $this->client->ensureColumnExists($input,function() use($input,$data,$list) {
                $list[$input] = $data->getClientOriginalName();
            });
        }

        return $list;
    }
}
