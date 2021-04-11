<?php

namespace App\Exceptions;

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
        $language = trans($languageStatement);

        return ($language == $languageStatement) ? $message : $language;
    }
}
