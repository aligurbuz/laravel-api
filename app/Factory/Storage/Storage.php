<?php

namespace App\Factory\Storage;

use App\Factory\Storage\Interfaces\StorageInterface;
use Exception;
use Illuminate\Support\Facades\Storage as LaravelStorage;

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
        $this->client = $this->binds['client'] ?? new class {
            };

        if (!method_exists($this->client, 'ensureColumnExists')) {
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

        foreach (($this->binds['files'] ?? []) as $input => $data) {
            $this->client->ensureColumnExists($input, function () use ($input, $data, &$list) {
                $filePath = $this->client->getModelName() . '/' . $data->getClientOriginalName();
                LaravelStorage::disk('local')->put($filePath, 'contents');
                $list[$input] = $filePath;
            });
        }

        return $list;
    }
}
