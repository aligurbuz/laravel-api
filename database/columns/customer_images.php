<?php return [
    'comments' => ["", "", "customer code", "customer image", "0:active 1:passive", "0:notDeleted 1:deleted", "", "", "", "", "", ""],
    'columns' => ["id", "customer_image_code", "customer_code", "image", "status", "is_deleted", "created_by", "updated_by", "deleted_by", "deleted_at", "created_at", "updated_at"],
    'indexes' => ["id", "customer_image_code", "customer_code"],
    'types' => ["integer", "integer", "integer", "image", "integer", "integer", "integer", "integer", "integer", "timestamp", "timestamp", "timestamp"],
    'required_columns' => ["customer_code", "image"],
    'max_length_columns' => ["image"],
    'max_length_values' => ["65535"],
    'boolean_values' => ["status", "is_deleted"],
    'default_keys' => ["customer_image_code", "status", "is_deleted", "created_by", "updated_by", "deleted_by"],
    'default_values' => ["0", "1", "0", "0", "0", "0"],
    'enum_columns' => [],
    'enum_values' => [],
];
