<?php

namespace App\Exceptions;

use App\Services\AppContainer;

trait ExceptionTrait
{
    /**
     * set message for exception data
     *
     * @param null|string $message
     * @return string
     */
    public function setMessage($message = null) : string
    {
        $languageStatement = 'exception.'.$this->langKey;
        $language = trans($languageStatement,$this->getKeys());

        return ($language == $languageStatement) ? $message : $language;
    }

    /**
     * get keys for container
     *
     * @return array
     */
    public function getKeys() : array
    {
        $calledClass = get_called_class();

        if(AppContainer::has($calledClass)){
            return AppContainer::get($calledClass);
        }

        return [];
    }
}
