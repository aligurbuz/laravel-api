<?php

declare(strict_types=1);

namespace App\Factory\Notify;

use App\Factory\Notify\Resource\Slack500Formatter\Slack500Formatter;

/**
 * Class NotifyManager
 * @package App\Factory\Notify
 */
abstract class NotifyManager
{
    /**
     * checks if the resource is valid for factory
     *
     * @param ?string $resource
     * @return bool
     */
    public function isValidResource(?string $resource): bool
    {
        return isset($this->binds['resource'][$resource]);
    }

    /**
     * is valid resource html instance for factory
     *
     * @param callable $callback
     * @return mixed
     */
    public function slack500Formatter(callable $callback): mixed
    {
        $resource = __FUNCTION__;

        $isValid = $this->isValidResource($resource)
            && $this->binds['resource'][$resource] instanceof Slack500Formatter
            && method_exists($this->binds['resource'][$resource], 'getError500');

        if ($isValid && !is_null($maker = $this->binds['resource'][$resource]->getError500())) {
            return call_user_func($callback, $maker);
        }

        return null;
    }
}
