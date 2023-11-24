<?php

namespace App\Exceptions;

use App\Libs\AppContainer;

trait ExceptionTrait
{
    /**
     * set message for exception data
     *
     * @param string|null $message
     * @return string
     */
    public function setMessage(?string $message = null): string
    {
        $languageStatement = 'exception.' . $this->langKey;
        $language = trans($languageStatement, $this->getKeys());

        return ($language === $languageStatement) ? $this->getMessageForTranslate($message) : $language;
    }

    /**
     * get keys for container
     *
     * @return array
     */
    private function getKeys(): array
    {
        $calledClass = static::class;

        if (AppContainer::has($calledClass)) {
            return AppContainer::get($calledClass);
        }

        return [];
    }

    /**
     * If the custom message is in the exception,
     * it will be replaced with this message.
     *
     * @param string $message
     * @return string
     */
    private function getMessageForTranslate(string $message): string
    {
        $customMessage = trans('exception.' . $message, $this->getKeys());

        return ($customMessage === 'exception.' . $message) ? $message : $customMessage;
    }
}
