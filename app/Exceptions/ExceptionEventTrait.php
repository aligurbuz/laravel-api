<?php

declare(strict_types=1);

namespace App\Exceptions;

use App\Constants;
use App\Factory\Factory;
use App\Services\AppContainer;

trait ExceptionEventTrait
{
    public function eventHandler(string $message)
    {
        // if the developer marks the notify parameter as true for exception,
        // the Container variable will return true.
        if(AppContainer::get(Constants::exceptionNotify)===true){
            Factory::notify()->push(config('app.exceptionNotifyChannel'),$message);
        }
    }
}
