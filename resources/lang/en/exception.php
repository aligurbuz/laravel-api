<?php

return [
    '500error'                      => 'An unexpected server internal error has occurred',
    'authenticateException'         => 'Your token data is incorrect. Please login again.',
    'loginException'                => 'Your login information is incorrect. Please login again.',
    'apiKeyException'               => 'You do not have valid token data for the api key.',
    'filterException'               => 'The field named :key is not a filterable field.',
    'clientCapsuleException'        => ':key value can not be sent',
    'clientEmptyException'          => 'You did not send any data.',
    'modelUniqueCreateException'    => 'data named :key is available in our systems.',
    'contentTypeException'          => 'Could not detect content-type in request.Please specify a valid content-type as header in your request.We just supports (:key)',
    'codeException'                 => 'Invalid :key (code=:value)',
    'grandAuthenticateException'    => 'You do not have the necessary permissions for this endpoint.',
    'rangeException'                => 'Range called :key is not valid',
    'selectException'               => 'Select statement called :key is not valid',
    'withException'                 => 'Invalid (withQuery) expression',
    'hasException'                  => 'has query value is not valid for :key',
    'doesntHaveException'           => 'doesnt have query value is not valid for :key',
    'hasFilterException'            => 'hasFilter query value is not valid for :key',
    'doesntHaveFilterException'     => 'doesntHaveFilter query value is not valid for :key',
    'withSelectException'           => 'Invalid select word in (withQuery) expression',
    'cacheException'                => 'Cache deleting process has failed',
    'permissionException'           => 'You are not authorized for :key endpoint. Please contact your system provider.',
    'resourceCollection'            => 'Collect column name is not valid',
    'page'                          => 'Page value is not valid.It must be numeric value',
    'sqlOperatorException'          => 'filter operator is not valid for :key',
    'limitException'                => 'limit value is not numeric',
    'limitExceedException'          => 'limit value exceeded.',
    'acceptLanguageNotIn'           => 'Accept-Language must be sent in the header request',
    'acceptLanguageNotValid'        => 'Accept-Language is not valid',
    'deniedEagerLoadings'           => 'You have been denied access to the relation :key',
    'groupByFieldException'         => 'GroupBy field for :key is not valid',
    'groupByProcessFieldException'  => 'GroupBy process field for :key is not valid',
    'groupByKeyException'           => 'GroupBy key for :key is not valid',
    'groupByDefaultException'       => 'field key for groupBy is mandatory',
    'updateException'               => 'Update process has been failed for :model',
    'arrayRuleException'            => 'for :key array',
    'clientActionException'         => 'The specified action value is not valid',
    'crKey'                         => 'in :key key',
    'excelFile'                     => 'The requested factory named (:key) is invalid.',
    'postRestricted'                => 'The (:key) value cannot be sent for POST method.',
    'putRestricted'                 => 'The (:key) value cannot be sent for PUT method.',
    'recursiveHasException'         => 'A maximum of 2 recursive (has) queries can be used.',
    'recursiveDoesntHaveException'  => 'A maximum of 2 recursive (doesntHave) queries can be used.',
    'clientNormalDataException'     => 'Before you can update a data, you have to send at least 2 input keys.',
    'notActiveUser'                 => 'The membership of the user you are trying to login to has not been activated yet.',
    'deletedUser'                   => 'Sorry. This user\'s membership has been blocked. Please contact to the system administrator.',
    'orderByString'                 => 'Sorting format is wrong. Please correct your "orderBy" key.',
    'filterMandatory'               => 'You can only display one data. So use filter.',
    'apiKeyRestrictions'            => 'This endpoint request cannot be performed for apiKey detected as (:key).',
    'invalidActivationCode'         => 'Activation code is invalid',
    'filterMandatoryKey'            => 'The (:key) key must be in the filter.',
    'invalid_email'                 => 'Email address is not valid',
    'invalid_phone'                 => 'Phone number is not valid',
    'password_reset_expire'         =>  'The password change request has timed out. Please try again.',
    'password_reset_fail'           =>  'We could not create the password of the user with :email. Please check the email and try again.',
    'invalid_hash'                  =>  'Hash value is not valid',
    'hitter'                        =>  'The key named (:key) cannot be sent for http (:method) method.',
    'notSource'                     =>  'Source is not valid. (key=:key)',
    'userPostPermission'            =>  'Only the administrators can add user.',
    'userRoleUpdatePermission'      =>  'Only the administrators can update user\'s role.',
    'userStatusUpdatePermission'    =>  'Only the administrators can update user\'s status.',
    'userIsDeletedUpdatePermission' =>  'Only the administrators can update user\'s deleting.',
    'userOwnDeleting'               =>  'The user cannot delete self.',
    'userOwnPassive'                =>  'The user cannot make passive self.',
    'emailVerifiedAt'               =>  'Email_verified_at data cannot be sent by the client.',
    'clientIfExists'                =>  'If the (:key) value is sent as (:value), the (:must) value must be sent mandatory.',
    'clientIfExceptExists'          => 'If the (:key) value is sent as (:value), the (:except) value cannot be sent.',
    'sameEvent'                     => 'The event named :event has been recorded before.',
    'roleUpdatePermission'          => 'Only the administrators can update a role.',
    'roleCreatePermission'          => 'Only the administrators can create a role.',
    'administratorRoleUpdate'       => 'The Admin role cannot be updated by any user.',
    'updatePermission'              => 'No user can update permission data.',
    'createPermission'              => 'No user can create permission data.',
    'isAdministratorKey'            => 'isAdministrator key cannot be sent by any user ',
    'putDeleteAuthorize'            => 'You do not have the permission to delete this data. Please contact your administrator.',
    'invalidPermissionCode'         => 'invalid permission code. (code=:code)',
    'invalidRoleFormatKey'          => 'role format key is invalid (key=:key code=:code)',
    'invalidRoleFormatValue'        => 'role format value must be only 0 or 1 as integer (key=:key value=:value code=:code) '
];
