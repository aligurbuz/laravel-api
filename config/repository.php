<?php

return [

    /**
     * Global scope represents classes and values
     * that are automatically added to your sql values as a where clause.
     * If there are classes in your repository directory of these string names,
     * these classes will be included in the rule.
     */
    'globalScopes' => ['userCode','customerCode'],

    /**
     * When the repository is started,
     * the method constructor with the same name as the repository will work as a method.
     * This setting will not initialize the repository based on .ClientKey values.
     */
    'dontGlobalScopes' => ['superAdmin'],

    /**
     * This setting represents the connection adapter
     * for the cache that will work on your repository connections.
     */
    'repositoryCacheConnection' => env('REPOSITORY_CACHE_CONNECTION','default'),

    /**
     * This setting is responsible for caching your repository links.
     * If its value is set to false, no cache data will be created for your repository transactions.
     */
    'repositoryCache' => env('REPOSITORY_CACHE',false),
];
