<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Exceptions\ExceptionTrait;

class ClientCapsuleException extends Exception
{
    use ExceptionTrait;

    /**
     * @var string
     */
    protected string $langKey = 'clientCapsuleException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "client capsule exception", $code = 400, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
