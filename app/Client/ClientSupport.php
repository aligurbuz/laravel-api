<?php

declare(strict_types=1);

namespace App\Client;

use App\Exceptions\Exception;
use App\Services\AppContainer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Trait ClientSupport
 * @package App\Client
 */
trait ClientSupport
{
    /**
     * it is is_default in the client data
     *
     * @var bool|null
     */
    protected bool|string|int $isDefault;
    /**
     * it is password in the client data
     *
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * it is is_deleted in the client data
     *
     * @var string|bool
     */
    protected string|bool $isDeleted = false;

    /**
     * get filterMandatory generator for request
     *
     * @param string|null $key
     * @return null
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function filterMandatoryGenerator(?string $key = null)
    {
        if(app()->runningInConsole()) return null;

        $filter = request()->get('filter');

        if (is_null($filter)) {
            Exception::customException('filterMandatory');
        }

        if(!is_null($key) && !isset($filter[$key])){
            Exception::customException('filterMandatoryKey', ['key' => $key]);
        }

        return null;
    }

    /**
     * when the is_default value is sent as 1,
     * if there is is_default in the table,
     * it will automatically run as a trigger that makes the previous records 0.
     *
     * @return bool|string|int
     */
    protected function isDefault(): bool|string|int
    {
        if ($this->isDefault && !isGet()) {
            $this->ensureColumnExists($snakeFunction = Str::snake(__FUNCTION__), function () use ($snakeFunction) {
                if(!AppContainer::has('noIsDefaultUpdate')){
                    $this->repository()->default()->update([[$snakeFunction => '0']], false);
                }
            });
        }

        return $this->isDefault;
    }

    /**
     * password value sent will be passed through the Hash::make() method.
     *
     * @return string|null
     */
    protected function password(): ?string
    {
        if (!is_null($this->password)) {
            return Hash::make($this->password);
        }

        return null;
    }

    /**
     * is_deleted input value for client
     *
     * @return bool|string
     */
    protected function isDeleted(): string|bool
    {
        if (isPost()) {
            Exception::customException('postRestricted', 'is_deleted');
        }

        return $this->isDeleted;
    }

    /**
     * it is order_count in the client data
     *
     * @var string|int
     */
    protected string|int $orderCount;

    /**
     * This key should not be sent by the client.
     *
     * @return bool|string|int
     */
    protected function orderCount(): bool|string|int
    {
        return Exception::customException(httpMethod().'Restricted',__FUNCTION__);
    }
}
