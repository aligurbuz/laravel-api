<?php

return [
    'web' => [
        'login' => ['POST'],
        'countries/*' => ['GET'],
        'customer/profiles' => ['POST'],
        'global' => ['GET','POST'],
        'password/changes' => ['PUT','POST'],
        //'timezones' => ['GET'],
    ],
    'authenticateWeb' => [
        'customer/profiles' => ['GET','PUT'],
        'logout' => ['POST'],
    ]
];
