<?php

declare(strict_types=1);

namespace App\Services\Request;

use Illuminate\Support\Facades\Http;

class Request extends RequestSupport
{
    /**
     * @var string|null
     */
    protected ?string $acceptLanguage = null;

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
     * Request constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
        $this->contentType = 'application/json';
        $this->acceptLanguage = 'en';

        $this->setHeaders();
    }

    /**
     * It registers the header variables to be sent to the API by the user.
     *
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers = []): self
    {
        $init = [
            //'Apikey:'.$this->apikey,
            'Content-Type:' . $this->contentType
        ];

        $this->headers = array_merge($headers, $init);

        return $this;
    }

    /**
     * get requesting method to api.
     *
     * @param string|null $url
     * @return self
     */
    public function get(?string $url = null): self
    {
        $this->result = Http::get($url);

        return $this;
    }
}
