<?php

namespace App\Exceptions\Custom;

use App\Constants;
use App\Exceptions\ExceptionEventTrait;
use App\Exceptions\ExceptionTrait;
use Exception;
use Throwable;

class ClientArrayLimiterException extends Exception
{
    use ExceptionTrait, ExceptionEventTrait;

    /**
     * @var string
     */
    protected string $langKey = 'clientArrayLimiter';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "client array limiter exception", $code = Constants::error400, Throwable $previous = null)
    {
        parent::__construct($getMessage = $this->setMessage($message), $code, $previous);

        $this->eventHandler($getMessage);
    }
}
