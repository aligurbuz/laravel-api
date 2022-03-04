<?php

namespace App\Exceptions;

use App\Constants;
use App\Factory\Factory;
use App\Services\AppContainer;

trait ExceptionTrait
{
    /**
     * set message for exception data
     *
     * @param string|null $message
     * @return string
     */
    public function setMessage(?string $message = null) : string
    {
        $languageStatement = 'exception.'.$this->langKey;
        $language = trans($languageStatement,$this->getKeys());

        $message = ($language == $languageStatement) ? $this->getMessageForTranslate($message) : $language;

        // if the developer marks the notify parameter as true for exception,
        // the Container variable will return true.
        if(AppContainer::get(Constants::exceptionNotify)===true){
            Factory::notify()->push(config('app.exceptionNotifyChannel'),$message);
        }

        return $message;
    }

    /**
     * If the custom message is in the exception,
     * it will be replaced with this message.
     *
     * @param string $message
     * @return string
     */
    private function getMessageForTranslate(string $message) : string
    {
        $customMessage = trans('exception.'.$message,$this->getKeys());

        return ($customMessage=='exception'.$message) ? $message : $customMessage;
    }

    /**
     * get keys for container
     *
     * @return array
     */
    private function getKeys() : array
    {
        $calledClass = get_called_class();

        if(AppContainer::has($calledClass)){
            return AppContainer::get($calledClass);
        }

        return [];
    }
}
