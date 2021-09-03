<?php return [
        'columns' => ["abbreviation","created_at","created_by","deleted_at","deleted_by","id","is_deleted","status","timezone","timezone_code","updated_at","updated_by","utc_offset"],
        'indexes' => ["id","timezone_code","status","is_deleted"],
        'types' => ["string","timestamp","integer","timestamp","integer","integer","integer","integer","string","integer","timestamp","integer","string"],
        'required_columns' => ["timezone"],
        'max_length_columns' => ["abbreviation","timezone","utc_offset"],
        'max_length_values' => ["255","255","255"],
        ];