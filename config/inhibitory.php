<?php

return [
    'web' => [
        'login' => ['POST'],
        'countries/*' => ['GET'],
        'customers' => ['POST'],
        'global' => ['GET','POST'],
        //'timezones' => ['GET'],
    ],
    'authenticateWeb' => [
        'customers' => ['GET','PUT'],
    ]
];
