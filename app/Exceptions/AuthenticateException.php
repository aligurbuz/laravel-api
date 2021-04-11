<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class AuthenticateException extends Exception
{
    use ExceptionTrait;

    /**
     * @var string
     */
    protected $langKey = 'authenticateException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "authenticate exception", $code = 401, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
