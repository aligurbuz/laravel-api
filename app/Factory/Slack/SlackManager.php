<?php

declare(strict_types=1);

namespace App\Factory\Slack;

use App\Factory\Slack\Resource\Html\Html;

/**
 * Class SlackManager
 * @package App\Factory\Slack
 */
abstract class SlackManager
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
    public function getError500ForResourceHtml(callable $callback): mixed
    {
        $resource = 'html';

        $isValid = $this->isValidResource($resource)
            && $this->binds['resource'][$resource] instanceof Html
            && method_exists($this->binds['resource'][$resource],'getError500');

        if($isValid && !is_null($maker = $this->binds['resource'][$resource]->getError500())){
            return call_user_func($callback,$maker);
        }

        return null;
    }
}
