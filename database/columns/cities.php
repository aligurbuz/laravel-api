<?php return [
        'columns' => ["city_code","city_name","country_code","created_at","created_by","deleted_at","deleted_by","id","is_deleted","status","updated_at","updated_by"],
        'indexes' => ["id","city_code","status","is_deleted","country_code"],
        'types' => ["integer","string","integer","timestamp","integer","timestamp","integer","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["city_name","country_code"],
        'max_length_columns' => ["city_name"],
        'max_length_values' => ["100"],
        ];