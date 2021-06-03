<?php

declare(strict_types=1);

namespace App\Factory\Notify\Resource\Slack500Formatter;

use Throwable;
use App\Services\Date;
use App\Facades\Authenticate\ApiKey;

/**
 * Class Slack500Formatter
 * @package App\Factory\Notify\Resource\Slack500Formatter
 */
class Slack500Formatter
{
    /**
     * @var array
     */
    protected array $binds = [];

    /**
     * @var string|null
     */
    protected ?string $error500;

    /**
     * Html constructor.
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;

        if(isThrowableInstance(($this->binds['error'] ?? new class{}))){
            $this->slack500Formatter($this->binds['error']);
        }
    }

    /**
     * @param Throwable $error
     * @return void
     */
    protected function slack500Formatter(Throwable $error): void
    {
        $list[] = '*'.config('app.name').' System 500 Internal Server Errors - '.Date::now()->toDateTimeString().'*';

        $list[] = '> *Client*: '.ApiKey::who();
        $list[] = '> *Error Message*: '.$error->getMessage();
        $list[] = '> *Error File*: '.$error->getFile();
        $list[] = '> *Error Line*: '.$error->getLine();
        $list[] = '> *Client Ip*: '.request()->getClientIp();
        $list[] = '> *Client Get Data*: '.json_encode(request()->query->all()).'';
        $list[] = '> *Client Post Data*: '.json_encode(request()->request->all()).'';
        $list[] = '> *Client Put Data*: '.json_encode(request()->request->all()).'';

        $this->error500 = implode(PHP_EOL,$list);
    }

    /**
     * get error 500 for slack html resource
     *
     * @return string|null
     */
    public function getError500(): ?string
    {
        return $this->error500;
    }
}
