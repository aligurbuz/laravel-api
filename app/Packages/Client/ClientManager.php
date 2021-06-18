<?php

declare(strict_types=1);

namespace App\Packages\Client;

use JetBrains\PhpStorm\Pure;
use App\Services\AppContainer;

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
     * @var null|mixed
     */
    protected array $dataStream;

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
     * set container data
     *
     * @return void
     */
    public function setContainerData() : void
    {
        if(AppContainer::has('clientData')){
            AppContainer::terminate('clientData');
        }

        AppContainer::set('clientData',$this->data);
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

        $this->setContainerData();
    }

    /**
     * set data for client
     *
     * @param $key
     * @param array $data
     * @return void
     */
    public function setBodyData($key,array $data = []): void
    {
        if(isset($this->data['body'][$key])){
            $this->data['body'][$key] = $data;
        }

        $this->setContainerData();
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
            return $this->clientBodyFormat(request()->request->all());
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
     * set data stream for client
     *
     * @param array $data
     */
    public function setDataStream(array $data = [])
    {
        $this->dataStream = $data;
    }

    /**
     * put data stream for client
     *
     * @param $key
     * @param $value
     * @return void
     */
    public function putDataStream($key,$value) : void
    {
        $this->dataStream[$key] = $value;
    }

    /**
     * set data stream for client
     *
     * @return mixed
     */
    public function getDataStream(): mixed
    {
        return $this->dataStream ?? [];
    }

    /**
     * handle for client
     *
     * @return void
     */
    public function handle() : void
    {
        if($this->requestMethod=='GET'){
            (new ClientParamProcess($this));
        }
        else{
            (new ClientBodyProcess($this));
        }
    }

    /**
     * get client body format
     *
     * @param array $data
     * @return array
     */
    #[Pure] private function clientBodyFormat(array $data = []) : array
    {
        $list = [];
        $multipleDimension = false;

        foreach ($data as $key => $value) {
            if (!$multipleDimension) {
                $list[$key] = $value;
            }
            else{
                $multipleDimension = true;
            }
        }

        if(count($list)){
            return [$list];
        }

        return $data;
    }
}
