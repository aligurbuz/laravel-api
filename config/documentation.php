<?php

return [
  'productionLinks' => [
      'currencies' => [
          //'all' => 'bb', //all key : all http methods
          //'GET' => 'xx',
      ]
  ],
    'definitions' => [
        "Currencies"            => "Currency is a medium of exchange for goods and services. In short, it's money, in the form of paper or coins, usually issued by a government and generally accepted at its face value as a method of payment.",
        "Timezones"             =>  "The term time zone can be used to describe several different things, but mostly it refers to the local time of a region or a country.",
        "Registration"          => "This endpoint is the service that makes user and other critical records.",
        "Countries"             => "This endpoint will return you the information of all countries.The countries service has post and put methods.However, its use is unnecessary.Therefore, it is the most correct method to request data from the service only with the GET method.",
        "Countries/Cities"      => "It contains the data serving the cities connected to the countries.Cities are strictly associated with country_code.So be careful with your (country_code) value when saving a city.",
        "Countries/Districts"   => "It contains the data serving the districts connected to the cities.Districts are strictly associated with city_code.So be careful with your (city_code) value when saving a district.",
        "Support/Excel"         => 'It is the endpoint that allows you to import your Excel files into the specified tables.Your post requests are queued and your due files will be saved in the relevant tables through the queue.',

    ],
    'exceptMethods' => [
        //'all' => ['GET','PUT'],
        //'countries/districts' => ['GET','PUT','POST'],
        'registration' => ['GET','PUT'],
        'support/excel' => ['GET','PUT'],
    ],
    "ignores" => [
        "SuperAdmins",
        "Mix",
        "Gate",
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

    'docUrl' => env('docUrl',base_path())
];
