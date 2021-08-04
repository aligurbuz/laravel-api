<?php return [
        'columns' => ["city_code","created_at","created_by","deleted_at","deleted_by","district_code","district_name","id","is_deleted","status","updated_at","updated_by"],
        'indexes' => ["id","district_code","status","is_deleted","city_code"],
        'types' => ["integer","timestamp","integer","timestamp","integer","integer","string","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["city_code","district_name"],
        'max_length_columns' => ["district_name"],
        'max_length_values' => ["100"],
        ];