<?php return [
    'comments' => ["", "", "", "", "", "0:notDeleted 1:deleted", "", "0:active 1:passive", "", "", "user data for registration"],
    'columns' => ["created_at", "created_by", "deleted_at", "deleted_by", "id", "is_deleted", "registration_code", "status", "updated_at", "updated_by", "user"],
    'indexes' => ["id", "registration_code", "status", "is_deleted"],
    'types' => ["timestamp", "integer", "timestamp", "integer", "integer", "integer", "integer", "integer", "timestamp", "integer", "array"],
    'required_columns' => ["user"],
    'max_length_columns' => [],
    'max_length_values' => [],
    'boolean_values' => ["is_deleted", "status"],
    'default_keys' => ["created_by", "deleted_by", "is_deleted", "registration_code", "status", "updated_by"],
    'default_values' => ["0", "0", "0", "0", "1", "0"],
    'enum_columns' => [],
    'enum_values' => [],
];
