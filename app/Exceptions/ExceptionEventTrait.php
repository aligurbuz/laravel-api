<?php

declare(strict_types=1);

namespace App\Exceptions;

use App\Constants;
use App\Factory\Factory;
use App\Services\AppContainer;

trait ExceptionEventTrait
{
    /**
     * exception event handler
     *
     * @param string $message
     * @return void
     */
    public function eventHandler(string $message) : void
    {
        // if the developer marks the notify parameter as true for exception,
        // the Container variable will return true.
        if(AppContainer::get(Constants::exceptionNotify)===true){
            Factory::notify()->push(config('app.exceptionNotifyChannel'),$message);
        }
    }
}
