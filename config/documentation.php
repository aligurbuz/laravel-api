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

    ],
    'exceptMethods' => [
        //'all' => ['GET','PUT'],
        //'countries/districts' => ['GET','PUT','POST'],
        //'countries/districts' => ['GET','PUT','POST'],
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
    ]
];
