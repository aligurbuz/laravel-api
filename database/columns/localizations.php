<?php return [
        'columns' => ["id","localization_code","language_code","item_code","values","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","language_code","item_code","localization_code","language_code","item_code","status","is_deleted"],
        'types' => ["integer","integer","integer","integer","json","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["language_code","item_code","values"],
        'max_length_columns' => [],
        'max_length_values' => [],
        ];