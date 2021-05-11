<?php

namespace App\Models\Features\RepositoryGlobalScopes;

use Illuminate\Support\Str;
use App\Facades\Authenticate\Authenticate;

/**
 * Trait GlobalScopeProcess
 * @package App\Models\Features\RepositoryGlobalScopes
 */
trait GlobalScopeProcess
{
    /**
     * puts user id to where clause for model
     *
     * @return object
     */
    public function userId(): object
    {
        return $this->ensureColumnExists($function = Str::snake(__FUNCTION__),function() use($function){
            return $this->builder->where($function,Authenticate::id());
        });
    }
}
