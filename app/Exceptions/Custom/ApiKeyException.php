<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Exceptions\ExceptionTrait;

class ApiKeyException extends Exception
{
    use ExceptionTrait;

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
    public function __construct($message = "apikey exception", $code = 401, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
