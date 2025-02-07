<?php

return [
    'productionLinks' => [
        'currencies' => [
            //'all' => 'bb', //all key : all http methods
            //'GET' => 'xx',
        ]
    ],
    'definitions' => [
        "Currencies" => "Currency is a medium of exchange for goods and services. In short, it's money, in the form of paper or coins, usually issued by a government and generally accepted at its face value as a method of payment.",
        "Timezones" => "The term time zone can be used to describe several different things, but mostly it refers to the local time of a region or a country.",
        "Registration" => "This endpoint is the service that makes user and other critical records.",
        "Countries" => "This endpoint will return you the information of all countries.The countries service has post and put methods.However, its use is unnecessary.Therefore, it is the most correct method to request data from the service only with the GET method.",
        "Countries/Cities" => "It contains the data serving the cities connected to the countries.Cities are strictly associated with country_code.So be careful with your (country_code) value when saving a city.",
        "Countries/Districts" => "It contains the data serving the districts connected to the cities.Districts are strictly associated with city_code.So be careful with your (city_code) value when saving a district.",
        "Support/Excel" => 'It is the endpoint that allows you to import your Excel files into the specified tables.Your post requests are queued and your due files will be saved in the relevant tables through the queue.',
        "Password/Changes" => 'This endpoint will send a one-time code via email or sms when the user forgets their login information.You can update your password with this code. There is a code execution time. Expired code will be unavailable. (Note: First, the POST method must be request. Sms or email will be sent via this http method. The password can be changed by sending the incoming code via PUT method) ',
        "Definition/Genders" => 'This endpoint generally includes the genders present in the world. This table is empty by default and the customer is expected to fill it herself. The system is not responsible for unnecessary genders. All names will be registered uniquely. The service throws an exception when the same name is registered a second time.',
        "Customer/Profiles" => 'Contains the customer profile endpoint. Customers use the web part of your app. Each customer record independently includes a gender and age factor. Extra parameters are available in the instructions. Some of these may be optional. Your customer profile constitutes your portfolio in general.',
        "Support/Crypt" => 'This endpoint returns the encrypted version of the data you post. You may be asked for this in some parts of the application.'
    ],

    'attentions' => [
        "Password/Changes@GET" => 'You can check whether the hash value is correct by doing an email and hash filter to this service. If the data key is empty in the returned response, it means that the hash or email is incorrect. The service will not throw an exception. ',
        "Password/Changes@POST" => 'This service is the method to be used for sms or email. Use this method first. The generated code will be sent to the client.',
        "Password/Changes@PUT" => 'After obtaining the hash value, the user is now entitled to change her password. It is sufficient to send email, hash and password values to the PUT method. ',
        "Definition/Genders@POST" => 'The Name field is unique. Do not make unnecessary gender registration. You are responsible for unnecessary gender registration.'
    ],
    'exceptMethods' => [
        //'all' => ['GET','PUT'],
        //'countries/districts' => ['GET','PUT','POST'],
        'registration' => ['GET', 'PUT'],
        'support/excel' => ['GET', 'PUT'],
        'support/crypt' => ['GET', 'PUT'],
        'gate/permissions' => ['POST', 'PUT'],
        'user/password' => ['POST', 'PUT'],
        'support/dummy' => ['GET', 'PUT']
    ],
    'exceptMethodKeys' => [
        'password/changes' => [
            'POST' => ['hash', 'client_time'],
            'PUT' => ['client_time', 'is_deleted', 'status'],
        ],
        'support/crypt' => [
            'POST' => ['authenticate', 'api_key'],
        ],
        'gate/roles' => [
            'POST' => ['is_administrator', 'roles', 'role_app_code'],
            'PUT' => ['is_administrator', 'role_app_code'],
        ]
    ],
    "ignores" => [
        "SuperAdmins",
        "Mix",
        //"Gate",
        "Register"
    ],
    "arrayRules" => [
        'serviceName' => [
            'field' => [
                'name' => [
                    'description' => '',
                    'required' => 'true',
                    'type' => 'string'
                ]
            ]
        ]
    ],

    'docUrl' => env('docUrl', base_path())
];
