<?php return [
    'comments' => ["", "", "language code", "language key", "language value", "0:active 1:passive", "0:notDeleted 1:deleted", "", "", "", "", "", ""],
    'columns' => ["id", "front_lang_code", "language_code", "key", "value", "status", "is_deleted", "created_by", "updated_by", "deleted_by", "deleted_at", "created_at", "updated_at"],
    'indexes' => ["id", "front_lang_code", "language_code"],
    'types' => ["integer", "integer", "integer", "string", "string", "integer", "integer", "integer", "integer", "integer", "timestamp", "timestamp", "timestamp"],
    'required_columns' => ["language_code", "key", "value"],
    'max_length_columns' => ["key", "value"],
    'max_length_values' => ["255", "65535"],
    'boolean_values' => ["status", "is_deleted"],
    'default_keys' => ["front_lang_code", "status", "is_deleted", "created_by", "updated_by", "deleted_by"],
    'default_values' => ["0", "1", "0", "0", "0", "0"],
    'enum_columns' => [],
    'enum_values' => [],
];
