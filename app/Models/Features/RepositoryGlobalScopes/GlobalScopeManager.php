<?php

namespace App\Models\Features\RepositoryGlobalScopes;

/**
 * Class GlobalScopeManager
 * @package App\Models\Features\RepositoryGlobalScopes
 */
class GlobalScopeManager extends AbstractGlobalScope
{
    use GlobalScopeProcess;

    /**
     * @var array|string[]
     */
    protected array $scopes = ['userId'];
}

