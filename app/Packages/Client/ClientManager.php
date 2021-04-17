<?php

declare(strict_types=1);

namespace App\Packages\Client;

/**
 * Class ClientManager
 * @package App\Packages\Client
 */
class ClientManager
{
    /**
     * get client data
     *
     * @var array
     */
    protected array $data = [];

    /**
     * available http methods for client
     *
     * @var array|string[]
     */
    protected array $methods = ['GET','POST','PUT'];

    /**
     * get request method for client
     *
     * @var null|string
     */
    protected ?string $requestMethod = null;

    /**
     * ClientManager constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->requestMethod();
        $this->setData($data);
    }

    /**
     * get data for client
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * set data for client
     *
     * @param array $data
     * @return void
     */
    public function setData(array $data = []): void
    {
        $this->data = count($data)
            ? $data
            :['params' => $this->getParamValues(),'body' => $this->getBodyValues()];
    }

    /**
     * set request method for client
     *
     * @param null $method
     * @return string
     */
    public function requestMethod($method = null): string
    {
        $this->requestMethod = $method ?? request()->method();

        return $this->requestMethod;
    }

    /**
     * get body value for client data
     *
     * @return array
     */
    public function getBodyValues(): array
    {
        if($this->requestMethod!=='GET'){
            return request()->request->all();
        }

        return [];
    }

    /**
     * get body value for client data
     *
     * @return array
     */
    public function getParamValues(): array
    {
        return request()->query->all();
    }

    /**
     * handle for client
     *
     * @return void
     */
    public function handle() : void
    {
        (new ClientParamProcess($this));
        (new ClientBodyProcess($this));
    }
}
