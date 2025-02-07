<?php return [
    'comments' => ["", "", "", "User activation values : None or Sms or Email", "one time hashing", "", "", "", ""],
    'columns' => ["id", "user_activation_code", "user_code", "options", "hash", "created_by", "updated_by", "created_at", "updated_at"],
    'indexes' => ["id", "user_activation_code", "user_code"],
    'types' => ["integer", "integer", "integer", "enum", "string", "integer", "integer", "timestamp", "timestamp"],
    'required_columns' => ["user_activation_code", "user_code", "options"],
    'max_length_columns' => ["options", "hash"],
    'max_length_values' => ["5", "255"],
    'boolean_values' => [],
    'default_keys' => ["created_by", "updated_by"],
    'default_values' => ["0", "0"],
    'enum_columns' => ["options"],
    'enum_values' => ["None,Sms,Email"],
];
