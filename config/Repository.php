<?php

return [
    /**
     * Global scope represents classes and values
     * that are automatically added to your sql values as a where clause.
     * If there are classes in your repository directory of these string names,
     * these classes will be included in the rule.
     */
    'globalScopes' => [],

    /**
     * When the repository is started,
     * the method constructor with the same name as the repository will work as a method.
     * This setting will not initialize the repository based on .ClientKey values.
     */
    'dontRepository' => ['admin','superAdmin'],
];
