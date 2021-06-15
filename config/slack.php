<?php

return [
    'logger' => [
        'channel' => 'logger',
        'hook' => 'hook-name',
    ],
    'error500' => [
        'channel' => 'error500',
        'hook' => env('slack500error','hook'),
    ]
];
