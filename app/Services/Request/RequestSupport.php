<?php

declare(strict_types=1);

namespace App\Services\Request;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

abstract class RequestSupport
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
    protected array $headers = [];

    /**
     * @var Response|null
     */
    protected ?Response $result = null;

    /**
     * @var string
     */
    protected string $url;

    /**
     * @var string
     */
    protected string $endpoint;

    /**
     * get result value for client request
     *
     * @return Response
     */
    public function getResult(): Response
    {
        return $this->result;
    }

    /**
     * get Status value for client request
     *
     * @return int
     */
    public function getStatus(): int
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

    /**
     * get endpoint for client request
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * get headers for client request
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * get http init for client request
     *
     * @return PendingRequest
     */
    public function getHttp(): PendingRequest
    {
        return Http::withHeaders($this->getHeaders());
    }

    /**
     * get endpoint full url for client request
     *
     * @param string|null $url
     * @return string
     */
    public function getFullUrl(?string $url = null): string
    {
        return $url ?? $this->getUrl() . '/' . $this->getEndpoint();
    }

    /**
     * get url for client request
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * set endpoint for client request
     *
     * @param string $endpoint
     * @return $this
     */
    public function endpoint(string $endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
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
            'Content-Type' => $this->contentType
        ];

        $this->headers = array_merge($headers, $init);

        return $this;
    }

    /**
     * set url for client request
     *
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
