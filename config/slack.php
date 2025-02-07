<?php

return [
    'logger' => [
        'channel' => 'logger',
        'hook' => 'hook-name',
    ],
    'error500' => [
        'channel' => 'error500',
        'hook' => env('SLACK_500_ERROR', 'hook'),
    ],
    'deployment' => [
        'channel' => 'deployment',
        'hook' => env('DEPLOYMENT_HOOK', ''),
    ]
];
