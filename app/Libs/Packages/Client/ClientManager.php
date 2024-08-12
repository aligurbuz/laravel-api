<?php

declare(strict_types=1);

namespace App\Libs\Packages\Client;

use App\Exceptions\Exception;
use App\Libs\AppContainer;
use App\Libs\HttpPutResolve;

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
    protected array $dataStream = [];

    /**
     * available http methods for client
     *
     * @var array|string[]
     */
    protected array $methods = ['GET', 'POST', 'PUT'];

    public static array $clientMethods = [
        'GET' => 'get',
        'POST' => 'create',
        'PUT' => 'update',
        'Get' => 'get',
        'Post' => 'create',
        'Put' => 'update',
        'get' => 'get',
        'post' => 'create',
        'put' => 'update',
    ];

    /**
     * get request method for client
     *
     * @var null|string
     */
    protected ?string $requestMethod = null;

    /**
     * @var array
     */
    protected array $register = [];

    /**
     * ClientManager constructor.
     * @param array $data
     * @param null $requestMethod
     */
    public function __construct(array $data = [], $requestMethod = null)
    {
        $this->requestMethod($requestMethod ?? request()->method());
        $this->setData($data);
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
        $this->data = ['params' => $this->getParamValues($data), 'body' => $this->getBodyValues($data)];
        $this->setContainerData();
    }

    /**
     * set data for client
     *
     * @param $key
     * @param array $data
     * @return void
     */
    public function setBodyData($key, array $data = []): void
    {
        if (isset($this->data['body'][$key])) {
            $this->data['body'][$key] = $data;
        }

        $this->setContainerData();
    }

    /**
     * set container data
     *
     * @return void
     */
    public function setContainerData(): void
    {
        if (AppContainer::has('clientData')) {
            AppContainer::terminate('clientData');
        }

        AppContainer::set('clientData', $this->data);
    }

    /**
     * get body value for client data
     *
     * @param array $data
     * @return array
     */
    public function getBodyValues(array $data = []): array
    {
        if ($this->requestMethod !== 'GET') {
            $data = count($data) ? $data : ($this->putRequestResolve() ?? request()->request->all());
            $clientBodyFormat = $this->clientBodyFormat($data);
            AppContainer::setWithTerminating('clientBody', $clientBodyFormat);
            return $clientBodyFormat;
        }

        return [];
    }

    /**
     * get put request resolve for client
     *
     * @return ?array
     */
    public function putRequestResolve(): ?array
    {
        if (request()->method() == 'PUT') {
            if (
                preg_match('/multipart\/form-data/', request()->headers->get('Content-Type'))
                || preg_match('/multipart\/form-data/', request()->headers->get('content-type'))
            ) {
                return (new HttpPutResolve())->resolve();
            }
        }

        return null;
    }

    /**
     * get body value for client data
     *
     * @param array $data
     * @return array
     */
    public function getParamValues(array $data = []): array
    {
        return count($data) ? $data : $this->paramModelClientDataIdentifier();
    }

    public function paramModelClientDataIdentifier()
    {
        $defaultQueries = request()->query->all();
        $modelClientName = $this->getModel() . 'Client';

        if (isset($defaultQueries[$modelClientName])) {
            return $defaultQueries[$modelClientName];
        }

        return $defaultQueries;
    }

    /**
     * put data stream for client
     *
     * @param $key
     * @param $value
     * @return void
     */
    public function putDataStream($key, $value): void
    {
        $this->dataStream[$key] = $value;
    }

    /**
     * reset data stream for client
     *
     * @return void
     */
    public function resetDataStream(): void
    {
        $this->dataStream = [];
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
     * set data stream for client
     *
     * @param array $data
     */
    public function setDataStream(array $data = [])
    {
        $this->dataStream = $data;
    }

    /**
     * handle for client
     *
     * @return void
     */
    public function handle(): void
    {
        if ($this->requestMethod == 'GET') {
            (new ClientParamProcess($this));
        } else {
            if (count($this->getRegister())) $this->setData();
            (new ClientBodyProcess($this));
        }
    }

    /**
     * get data for client
     *
     * @return array
     */
    public function getRegister(): array
    {
        return $this->register;
    }

    /**
     * get data for client
     *
     * @param $key
     * @param $value
     * @return void
     */
    public function setRegister($key, $value): void
    {
        $this->register[$key] = $value;
    }

    /**
     * get hitter value handler method for client process
     *
     * @param array $hitters
     * @param array $value
     * @param int $key
     * @return array
     */
    private function hitterValueHandler(array $hitters, array $value, int $key = 0): array
    {
        if (count($hitters)) {
            foreach ($value as $keyForHit => $valueForHit) {
                if (in_array($keyForHit, $hitters, true)) {
                    $valueHitOperator = substr((string)$valueForHit, 0, 1);
                    if ($valueHitOperator == '-' or $valueHitOperator == '+') {
                        $value[$keyForHit] = substr((string)$valueForHit, 1);
                        AppContainer::set('repositoryHitter.' . $key . '.' . $keyForHit, $valueHitOperator);
                    }
                }
            }
        }

        return $value;
    }

    /**
     * get client body format
     *
     * @param array $data
     * @return array
     */
    private function clientBodyFormat(array $data = []): array
    {
        $list = [];
        $multipleDimension = false;
        $repository = $this->repository(true);
        $repositoryInstance = $this->repository();
        $hitters = $repository == 'noModel' ? [] : $repositoryInstance->getHitter();

        $data = !isset($data[0]) ? [$data] : $data;

        $ifExistValues = [];
        if(property_exists($this,'ifExist')){
            $ifExistValues = $this->ifExist;
        }

        foreach ($data as $key => $value) {

            $valueList = [];
            foreach ($value as $valueKey => $valueItem) {

                if(isset($ifExistValues[$valueKey])){
                    foreach ($ifExistValues[$valueKey] as $ifItem){
                        if(!isset($value[$ifItem])){
                            Exception::customException('clientIfItem', [
                                'client' => $valueKey,
                                'key' => implode(',',$ifExistValues[$valueKey])
                            ]);
                        }
                    }
                }

                if (!is_null($valueItem)) {
                    $valueList[$valueKey] = $valueItem;
                }
            }

            $value = $valueList;

            if (!$multipleDimension) {
                $value = $value[$repository . 'Client'] ?? $value;
                $value = array_merge($value, $this->getRegister());
                $list[$key] = $this->hitterValueHandler($hitters, $value, $key);
            } else {
                $multipleDimension = true;
            }
        }

        if (count($list)) {
            return $list;
        }

        return $data;
    }
}
