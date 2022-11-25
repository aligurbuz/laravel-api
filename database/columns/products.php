<?php return [
        'comments' => ["","","product name","product price","product stock","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","product_code","name","price","in_stock","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","product_code","status","is_deleted"],
        'types' => ["integer","integer","string","double","integer","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["name","price"],
        'max_length_columns' => ["name"],
        'max_length_values' => ["255"],
        'boolean_values' => ["in_stock","status","is_deleted"],
        'default_keys' => ["product_code","in_stock","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'default_values' => ["0","0","1","0","0","0","0","NULL","NULL","NULL"],
        'enum_columns' => [],
        'enum_values' => [],
        ];