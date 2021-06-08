<?php return [
        'columns' => ["id","localization_code","language_code","item_code","key","value","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","localization_code","language_code","item_code","status","is_deleted"],
        'types' => ["integer","integer","integer","integer","string","string","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["language_code","item_code","key","value"],
        'max_length_columns' => ["key","value"],
        'max_length_values' => ["100","65535"],
        ];