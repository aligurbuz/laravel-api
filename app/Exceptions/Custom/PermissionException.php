<?php

namespace App\Exceptions\Custom;

use Exception;
use Throwable;
use App\Constants;
use App\Exceptions\ExceptionTrait;
use App\Exceptions\ExceptionEventTrait;

class PermissionException extends Exception
{
    use ExceptionTrait,ExceptionEventTrait;

    /**
     * @var string
     */
    protected string $langKey = 'permissionException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "permission exception", $code = Constants::error403, Throwable $previous = null)
    {
        parent::__construct($getMessage = $this->setMessage($message), $code, $previous);

        $this->eventHandler($getMessage);
    }
}
