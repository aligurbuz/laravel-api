<?php

try {
    return [
        'registration' => [
            'post' => [
                'user' => [
                    'name' => 'name',
                    'username' => 'test_' . random_int(0, 999999999),
                    'email' => 'test_' . random_int(0, 999999999999) . '_' . time() . '@gmail.com',
                    'password' => "Ali1234567",
                    'status' => true
                ]
            ]
        ]
    ];
} catch (Exception $e) {
}
