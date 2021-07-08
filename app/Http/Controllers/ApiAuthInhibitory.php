<?php

declare(strict_types=1);

namespace App\Http\Controllers;

/**
 * Trait ApiAuthInhibitory
 * @package App\Http\Controllers
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
    public function apiAuthInhibitory() : bool
    {
        $this->inhibitory = config('inhibitory');

        if(isset($this->inhibitory[who()])){
            return $this->inhibitoryHandler();
        }

        return true;
    }

    /**
     * get inhibitory handler for apiAuthenticate
     *
     * @return bool
     */
    private function inhibitoryHandler() : bool
    {
        $endpoint       = endpoint();
        $inhibitory     = $this->inhibitory[who()] ?? [];
        $endpointSplit  = explode('/',$endpoint);
        $rootEndpoint   = $endpointSplit[0] ?? null;

        if(isset($inhibitory[$endpoint]) && is_array($inhibitory[$endpoint])){
            if($this->methods($inhibitory[$endpoint])){
                return false;
            }
        }

        if(isset($inhibitory[$rootEndpoint.'/*']) && is_array($inhibitory[$rootEndpoint.'/*'])){
            if($this->methods($inhibitory[$rootEndpoint.'/*'])){
                return false;
            }
        }

        if(count($inhibitory)) $this->apiAuthInhibitoryException = true;

        return true;
    }

    /**
     * checks if the methods are valid
     *
     * @param array $methods
     * @return bool
     */
    private function methods (array $methods = []) : bool
    {
        return in_array(request()->method(),$methods,true);
    }
}
