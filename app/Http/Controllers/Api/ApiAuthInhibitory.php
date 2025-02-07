<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;

/**
 * Trait ApiAuthInhibitory
 * @package App\Http\Controllers\Api
 */
trait ApiAuthInhibitory
{
    /**
     * @var array
     */
    protected array $inhibitory = [];

    /**
     * @var bool
     */
    protected bool $apiAuthInhibitoryException = false;

    /**
     * it makes inhibitory for apiAuthenticate
     *
     * @return bool
     */
    public function apiAuthInhibitory(): bool
    {
        $this->inhibitory = config('inhibitory');

        if (isset($this->inhibitory[who()])) {
            return $this->inhibitoryHandler($this->inhibitory[who()]);
        }

        if (!isset($this->inhibitory[who()]) && isset($this->inhibitory['authenticate' . ucfirst(who())])) {
            return $this->inhibitoryOnlyAuthenticateHandler($this->inhibitory['authenticate' . ucfirst(who())]);
        }

        return true;
    }

    /**
     * get inhibitory handler for apiAuthenticate
     *
     * @param array $inhibitory
     * @return bool
     */
    private function inhibitoryHandler(array $inhibitory = []): bool
    {
        $endpoint = endpoint();
        $endpointSplit = explode('/', $endpoint);
        $rootEndpoint = $endpointSplit[0] ?? null;
        $authenticateInhibitory = $this->inhibitory[Str::camel('authenticate_' . who())] ?? [];

        if (isset($authenticateInhibitory[$endpoint]) && is_array($authenticateInhibitory[$endpoint])) {
            if ($this->methods($authenticateInhibitory[$endpoint])) {
                return true;
            }
        }

        if (isset($authenticateInhibitory[$rootEndpoint . '/*']) && is_array($authenticateInhibitory[$rootEndpoint . '/*'])) {
            if ($this->methods($authenticateInhibitory[$rootEndpoint . '/*'])) {
                return true;
            }
        }

        if (isset($inhibitory[$endpoint]) && is_array($inhibitory[$endpoint])) {
            if ($this->methods($inhibitory[$endpoint])) {
                return false;
            }
        }

        if (isset($inhibitory[$rootEndpoint . '/*']) && is_array($inhibitory[$rootEndpoint . '/*'])) {
            if ($this->methods($inhibitory[$rootEndpoint . '/*'])) {
                return false;
            }
        }

        if (count($inhibitory)) $this->apiAuthInhibitoryException = true;

        return true;
    }

    /**
     * checks if the methods are valid
     *
     * @param array $methods
     * @return bool
     */
    private function methods(array $methods = []): bool
    {
        return in_array(request()->method(), $methods, true);
    }

    /**
     * get inhibitory handler for apiAuthenticate
     *
     * @param array $inhibitory
     * @return bool
     */
    private function inhibitoryOnlyAuthenticateHandler(array $inhibitory = []): bool
    {
        $endpoint = endpoint();
        $endpointSplit = explode('/', $endpoint);
        $rootEndpoint = $endpointSplit[0] ?? null;
        $authenticateInhibitory = $this->inhibitory[Str::camel('authenticate_' . who())] ?? [];

        if (isset($authenticateInhibitory[$endpoint]) && is_array($authenticateInhibitory[$endpoint])) {
            if ($this->methods($authenticateInhibitory[$endpoint])) {
                return true;
            }
        }

        if (isset($authenticateInhibitory[$rootEndpoint . '/*']) && is_array($authenticateInhibitory[$rootEndpoint . '/*'])) {
            if ($this->methods($authenticateInhibitory[$rootEndpoint . '/*'])) {
                return true;
            }
        }


        $this->apiAuthInhibitoryException = true;

        return true;
    }
}
