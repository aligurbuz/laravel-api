<?php

return [
    'registration' => [
        'post' => [
            'user' => [
                'name' => 'name',
                'email' => 'test_'.rand(0,999999999999).'_'.time().'@gmail.com',
                'password' => "Ali1234567",
                'status' => true
            ]
        ]
    ]
];
