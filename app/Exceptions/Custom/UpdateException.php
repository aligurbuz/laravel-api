<?php

namespace App\Exceptions\Custom;

use App\Constants;
use App\Exceptions\ExceptionEventTrait;
use App\Exceptions\ExceptionTrait;
use Exception;
use Throwable;

class UpdateException extends Exception
{
    use ExceptionTrait, ExceptionEventTrait;

    /**
     * @var string
     */
    protected string $langKey = 'updateException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Update failed", $code = Constants::error400, Throwable $previous = null)
    {
        parent::__construct($getMessage = $this->setMessage($message), $code, $previous);

        $this->eventHandler($getMessage);
    }
}
