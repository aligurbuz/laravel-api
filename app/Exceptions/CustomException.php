<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class CustomException extends Exception
{
    use ExceptionTrait;

    /**
     * @var string
     */
    protected string $langKey = 'customException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Custom exception", $code = 400, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
