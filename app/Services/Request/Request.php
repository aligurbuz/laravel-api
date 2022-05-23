<?php

declare(strict_types=1);

namespace App\Services\Request;

use Illuminate\Support\Facades\Http;

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
        $url = $url ?? $this->getUrl() . '/' . $this->getEndpoint();

        $this->result = Http::withHeaders($this->getHeaders())->get($url);

        return $this;
    }
}
