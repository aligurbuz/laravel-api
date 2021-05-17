<?php

return [
    '500error'                  => 'An unexpected server internal error has occurred',
    'authenticateException'     => 'Your token data is incorrect. Please login again.',
    'loginException'            => 'Your login information is incorrect. Please login again.',
    'apiKeyException'           => 'You do not have valid token data for the api key.',
    'filterException'           => 'The field named :key is not a filterable field.',
    'clientCapsuleException'    => ':key value can not be sent',
    'clientEmptyException'      => 'You did not send any data.',
    'modelUniqueCreateException'    => 'data named :key is available in our systems.',
    'contentTypeException'      => 'Could not detect content-type in request.Please specify a valid content-type as header in your request.We just supports (:key)',
];
