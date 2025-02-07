<?php return [
    'comments' => ["", "", "excel file", "Which model will the excel content be loaded into?", "0:active 1:passive", "0:notDeleted 1:deleted", "", "", "", "", "", ""],
    'columns' => ["id", "excel_code", "excel_file", "excel_factory", "status", "is_deleted", "created_by", "updated_by", "deleted_by", "deleted_at", "created_at", "updated_at"],
    'indexes' => ["id", "excel_code", "status", "is_deleted"],
    'types' => ["integer", "integer", "file", "string", "integer", "integer", "integer", "integer", "integer", "timestamp", "timestamp", "timestamp"],
    'required_columns' => ["excel_file", "excel_factory"],
    'max_length_columns' => ["excel_file", "excel_factory"],
    'max_length_values' => ["255", "255"],
    'boolean_values' => ["status", "is_deleted"],
    'default_keys' => ["excel_code", "status", "is_deleted", "created_by", "updated_by", "deleted_by"],
    'default_values' => ["0", "1", "0", "0", "0", "0"],
    'enum_columns' => [],
    'enum_values' => [],
];
