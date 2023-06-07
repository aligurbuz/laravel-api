<?php

namespace App\Client\Customer;

trait CustomerMainSupport
{
    /**
     * @var array|string[]
     */
    protected array $capsuleComments = [
        'gender' => 'represents the value that will contain the customer\'s gender information.',
        'age' => 'represents the value that will contain the customer\'s age information.',
        'contact' => 'represents the value that will contain the customer\'s contact information.',
    ];
}
