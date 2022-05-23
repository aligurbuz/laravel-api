<?php

declare(strict_types=1);

namespace App\Services\Request;

use Illuminate\Http\Client\Response;

abstract class RequestSupport
{
    /**
     * @var Response
     */
    protected Response $result;

    /**
     * get result value for client request
     *
     * @return Response
     */
    public function getResult() : Response
    {
        return $this->result;
    }

    /**
     * get Status value for client request
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->getResult()->status();
    }

    /**
     * get array result value for client request
     *
     * @return array
     */
    public function getContent(): array
    {
        return $this->getResult()->json();
    }
}
