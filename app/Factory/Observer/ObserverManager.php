<?php

declare(strict_types=1);

namespace App\Factory\Observer;

use App\Constants;
use Illuminate\Support\Str;

/**
 * Class ObserverManager
 * @package App\Factory\Observer
 */
abstract class ObserverManager
{
    /**
     * get observer namespace
     *
     * @return string
     */
    public function observerNamespace(): string
    {
        $name = $this->name ?? null;
        $namespace = Str::ucfirst($name).'\Observers\\'.Str::ucfirst($name).'\\'.Str::ucfirst($this->observer);

        return Constants::controllerNamespace.'\\'.$namespace;
    }

    /**
     * get observer before namespace
     *
     * @return string
     */
    public function observerBeforeNamespace(): string
    {
        return $this->observerNamespace().'\Before';
    }

    /**
     * get observer before namespace
     *
     * @return string
     */
    public function observerAfterNamespace(): string
    {
        return $this->observerNamespace().'\After';
    }

    /**
     * observer setting for factory
     *
     * @return void
     */
    public function observerDetector() : void
    {
        $observer = $this->binds['observer'] ?? '';
        $observerArray = explode(':',$observer);

        $this->name = $observerArray[0] ?? null;
        $this->observer = $observerArray[1] ?? null;
    }
}
