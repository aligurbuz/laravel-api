<?php

namespace App\Services\Request;

class Request
{
    /**
     * @var string|null
     */
    protected ?string $acceptLanguage = null;

    /**
     * @var string|null
     */
    protected ?string $apikey = null;

    /**
     * @var string|null
     */
    protected ?string $url = null;

    /**
     * @var string|null
     */
    protected ?string $contentType = null;

    /**
     * @var array
     */
    protected array $data = [];

    /**
     * @var array
     */
    protected array $headers = [];

    /**
     * @var string|null
     */
    protected ?string $endpoint = null;

    /**
     * @var array
     */
    protected array $result = [];

    /**
     * Request constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->url              = config('app.apiUrl');
        $this->data             = $data;
        $this->apikey           = config('app.apiKey');
        $this->contentType      = 'application/json';
        $this->acceptLanguage   = 'en';

        $this->setHeaders();
    }

    /**
     * It registers the header variables to be sent to the API by the user.
     *
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers = []) : self
    {
        $init = [
            //'Apikey:'.$this->apikey,
            'Content-Type:'.$this->contentType
        ];

        $this->headers = array_merge($headers,$init);

        return $this;
    }

    /**
     * Sets the endpoint for the api.
     *
     * @param string $endpoint
     * @return $this
     */
    public function endpoint(string $endpoint) : self
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * lists results returned from api
     *
     * @return array
     */
    public function getResult() : array
    {
        return $this->result;
    }

    /**
     * lists results returned from api
     *
     * @return ?string
     */
    public function errorMessage() : ?string
    {
        return (!$this->result['status']) ? $this->result['errorMessage'] : null;
    }

    /**
     * post requesting method to api.
     *
     * @return $this
     */
    public function post() : self
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$this->url.'/'.$this->endpoint);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($this->data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

        $result = curl_exec ($ch);
        curl_close ($ch);

        $this->result = json_decode($result,1);

        return $this;
    }

    /**
     * get requesting method to api.
     *
     * @param string|null $fullUrl
     * @return $this
     */
    public function get(?string $fullUrl = null) : self
    {
        $ch = curl_init();
        $query = http_build_query($this->data);
        $url = $fullUrl ?? ($this->url.'/'.$this->endpoint.'?'.$query);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);

        $result = curl_exec ($ch);
        curl_close ($ch);

        $this->result = json_decode($result,1);

        return $this;
    }
}
