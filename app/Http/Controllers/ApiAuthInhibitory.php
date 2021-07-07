<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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
        $inhibitory = $this->inhibitory[who()] ?? [];
        $uri = str_replace('api/','',Route::getCurrentRoute()->uri());

        if(isset($inhibitory[$uri])){
            return $inhibitory[$uri];
        }

        if(isset($inhibitory[$uri.'/*'])){
            return $this->methods($inhibitory[$uri.'/*']);
        }

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
        return !in_array(request()->method(),$methods,true);
    }
}
