<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Constants;
use App\Exceptions\ExceptionTrait;

class AccessLoggerException extends Exception
{
    use ExceptionTrait;

    /**
     * @var string
     */
    protected string $langKey = 'accessLoggerException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "access logger exception", $code = Constants::error500, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
