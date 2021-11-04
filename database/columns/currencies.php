<?php return [
        'comments' => ["","","currency symbol ($,€ etc.)","currency name (EURO,USD etc.)","Indicates whether the symbol is to the right or left of the number.(0:left,1:right","","","","","","","",""],
        'columns' => ["id","currency_code","symbol","name","symbol_place_status","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","currency_code","status","is_deleted"],
        'types' => ["integer","integer","string","string","integer","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["symbol","name"],
        'max_length_columns' => ["symbol","name"],
        'max_length_values' => ["10","20"],
        'boolean_values' => ["symbol_place_status","status","is_deleted"],
        'default_keys' => ["currency_code","symbol_place_status","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","1","1","0","0","0","0"],
        ];