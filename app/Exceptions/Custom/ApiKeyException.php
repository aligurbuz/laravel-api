<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Constants;
use App\Exceptions\ExceptionTrait;
use App\Exceptions\ExceptionEventTrait;

class ApiKeyException extends Exception
{
    use ExceptionTrait,ExceptionEventTrait;

    /**
     * @var string
     */
    protected string $langKey = 'apiKeyException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "apikey exception", $code = Constants::error401, Throwable $previous = null)
    {
        parent::__construct($getMessage = $this->setMessage($message), $code, $previous);

        $this->eventHandler($getMessage);
    }
}
