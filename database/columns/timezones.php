<?php return [
        'comments' => ["","","","","","","","","","","","",""],
        'columns' => ["id","timezone_code","timezone","abbreviation","utc_offset","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","timezone_code","status","is_deleted"],
        'types' => ["integer","integer","string","string","string","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["timezone"],
        'max_length_columns' => ["timezone","abbreviation","utc_offset"],
        'max_length_values' => ["255","255","255"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["timezone_code","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","1","0","0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];