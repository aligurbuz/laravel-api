<?php return [
    'columns' => ["created_at", "created_by", "deleted_at", "deleted_by", "id", "image_description", "image_name", "is_deleted", "sequence", "sequence_time", "status", "updated_at", "updated_by", "user_code", "user_image", "user_photo_code"],
    'indexes' => ["id", "user_photo_code", "user_code", "status", "is_deleted", "user_code", "is_deleted", "sequence_time", "sequence"],
    'types' => ["timestamp", "integer", "timestamp", "integer", "integer", "string", "string", "integer", "integer", "integer", "integer", "timestamp", "integer", "integer", "image", "integer"],
    'required_columns' => ["user_code", "user_image"],
    'max_length_columns' => ["image_description", "image_name", "user_image"],
    'max_length_values' => ["255", "255", "255"],
    'boolean_values' => ["is_deleted", "status"],
    'default_keys' => ["created_by", "deleted_by", "is_deleted", "sequence", "sequence_time", "status", "updated_by", "user_photo_code"],
    'default_values' => ["0", "0", "0", "1", "0", "1", "0", "0"],
];
