<?php

declare(strict_types=1);

namespace App\Services\Request;

class Request extends RequestSupport
{
    /**
     * @var array
     */
    protected array $data = [];

    /**
     * Request constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
        $this->contentType = 'application/json';
        $this->acceptLanguage = 'en';
    }

    /**
     * get requesting method to api.
     *
     * @param string|null $url
     * @return self
     */
    public function get(?string $url = null): self
    {
        $url = $this->getFullUrl($url);

        $this->result = $this->getHttp()->{__FUNCTION__}($url);

        return $this;
    }

    /**
     * post requesting method to api.
     *
     * @param array $data
     * @param string|null $url
     * @return self
     */
    public function post(array $data = [],?string $url = null): self
    {
        $url = $this->getFullUrl($url);

        $this->result = $this->getHttp()->{__FUNCTION__}($url,$data);

        return $this;
    }

    /**
     * put requesting method to api.
     *
     * @param array $data
     * @param string|null $url
     * @return self
     */
    public function put(array $data = [],?string $url = null): self
    {
        $url = $this->getFullUrl($url);

        $this->result = $this->getHttp()->{__FUNCTION__}($url,$data);

        return $this;
    }

    /**
     * delete requesting method to api.
     *
     * @param array $data
     * @param string|null $url
     * @return self
     */
    public function delete(array $data = [],?string $url = null): self
    {
        $url = $this->getFullUrl($url);

        $this->result = $this->getHttp()->{__FUNCTION__}($url,$data);

        return $this;
    }
}
