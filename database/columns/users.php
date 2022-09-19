<?php return [
    'comments' => ["", "", "", "", "", "user phone number", "", "status:1 - active,status:0 passive", "is_deleted:0 - undeleted,is_deleted:1 deleted", "", "", "", "", ""],
    'columns' => ["id", "user_code", "role_code", "name", "email", "phone", "email_verified_at", "status", "is_deleted", "password", "remember_token", "created_at", "updated_at", "username"],
    'indexes' => ["id", "user_code", "email", "email", "password"],
    'types' => ["integer", "integer", "integer", "string", "string", "string", "timestamp", "integer", "integer", "string", "string", "timestamp", "timestamp", "string"],
    'required_columns' => ["user_code", "name", "email", "password"],
    'max_length_columns' => ["name", "email", "phone", "password", "remember_token", "username"],
    'max_length_values' => ["255", "255", "255", "255", "100", "255"],
    'boolean_values' => ["status", "is_deleted"],
    'default_keys' => ["role_code", "status", "is_deleted"],
    'default_values' => ["0", "0", "0"],
    'enum_columns' => [],
    'enum_values' => [],
];
