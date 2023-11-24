<?php

declare(strict_types=1);

namespace App\Exceptions;

use App\Constants;
use App\Factory\Factory;
use App\Libs\AppContainer;

trait ExceptionEventTrait
{
    /**
     * exception event handler
     *
     * @param string $message
     * @return void
     */
    public function eventHandler(string $message): void
    {
        // if the developer marks the notify parameter as true for exception,
        // the Container variable will return true.
        $this->notifyException(function ($notifyChannel) use ($message) {
            Factory::notify()->push($notifyChannel, $message);
        });
    }

    /**
     * gets exception notify channel
     *
     * @param callable $callback
     * @return void
     */
    private function notifyException(callable $callback): void
    {
        $exceptionNotify = AppContainer::get(Constants::exceptionNotify);

        if ($exceptionNotify === true || is_string($exceptionNotify)) {
            $callback((is_string($exceptionNotify) ? $exceptionNotify : $this->getNotifyChannel()));
        }
    }

    /**
     * get notify channel for exception event handler
     *
     * @return string
     */
    private function getNotifyChannel(): string
    {
        return property_exists($this, 'notifyChannel')
            ? $this->notifyChannel
            : config('app.exceptionNotifyChannel');
    }
}
