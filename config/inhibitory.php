<?php

return [
    'web' => [
        'login' => ['POST'],
        'countries/*' => ['GET'],
        'customer/profiles' => ['POST'],
        'global' => ['GET','POST'],
        //'timezones' => ['GET'],
    ],
    'authenticateWeb' => [
        'customer/profiles' => ['GET','PUT'],
        'logout' => ['POST'],
    ]
];
