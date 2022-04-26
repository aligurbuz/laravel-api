<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Constants;
use App\Exceptions\ExceptionTrait;

class ClientFormatException extends Exception
{
    use ExceptionTrait;

    /**
     * @var string
     */
    protected string $langKey = 'clientFormatException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "client format exception", $code = Constants::error400, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
