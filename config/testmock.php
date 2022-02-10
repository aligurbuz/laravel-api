<?php

return [
    'registration' => [
        'post' => [
            'user' => [
                'name' => 'name',
                'email' => 'test_'.rand(0,999999999999).'@gmail.com',
                'password' => (string) rand(0,123456),
            ]
        ]
    ]
];
