<?php

return [
    'web' => [
        'countries/*' => ['GET'],
        'customers' => ['POST'],
    ],
    'authenticateWeb' => [
        'customers' => ['GET','PUT'],
    ]
];
