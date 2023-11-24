<?php

namespace App\Exceptions;

use App\Factory\Factory;
use App\Libs\Response\Response;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * @param $request
     * @param Throwable $e
     * @return object
     *
     * @throws Exception
     */
    public function render($request, Throwable $e): object
    {
        if (!app()->runningInConsole()) {
            $this->notifyForInternalServer($e);
        }

        return Response::error($e->getMessage(), $e->getCode(), $e);
    }

    /**
     * notify for 500 internal server
     *
     * @param Throwable $e
     * @return void
     */
    private function notifyForInternalServer(Throwable $e): void
    {
        if ($this->isTrueNotifyCondition($e)) {
            Factory::notify(['error' => $e])->internalServerError();
        }
    }

    /**
     * checks if to notify condition is valid
     *
     * @param Throwable $e
     * @return bool
     */
    private function isTrueNotifyCondition(Throwable $e): bool
    {
        return $e->getCode() == '0'
            && app()->environment() !== 'local'
            && class_basename($e) !== 'MethodNotAllowedHttpException';
    }

}
