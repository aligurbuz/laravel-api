<?php return [
        'columns' => ["id","currency_code","symbol","name","symbol_place_status","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","currency_code","status","is_deleted"],
        'types' => ["integer","integer","string","string","integer","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["symbol","name"],
        'max_length_columns' => ["symbol","name"],
        'max_length_values' => ["10","20"],
        ];