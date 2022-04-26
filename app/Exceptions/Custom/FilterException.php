<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Constants;
use App\Exceptions\ExceptionTrait;

class FilterException extends Exception
{
    use ExceptionTrait;

    /**
     * @var string
     */
    protected string $langKey = 'filterException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Filter exception", $code = Constants::error400, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }
}
