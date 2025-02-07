<?php return [
        'comments' => ["","","product code","item name","item sufficient vary","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","item_code","product_code","name","sufficient_vary","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","item_code","product_code"],
        'types' => ["integer","integer","integer","string","enum","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["product_code","name","sufficient_vary"],
        'max_length_columns' => ["name","sufficient_vary"],
        'max_length_values' => ["255","1"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["item_code","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","1","0","0","0","0"],
        'enum_columns' => ["sufficient_vary"],
        'enum_values' => ["J,T,M"],
        ];