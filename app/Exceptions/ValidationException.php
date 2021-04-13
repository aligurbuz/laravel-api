<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class ValidationException extends Exception
{
    use ExceptionTrait;

    /**
     * @var string
     */
    protected string $langKey = 'validException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Valid exception", $code = 400, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
