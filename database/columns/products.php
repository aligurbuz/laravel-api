<?php return [
        'comments' => ["","","product name","product price","product is var valuable","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","product_code","name","price","is_var","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","product_code"],
        'types' => ["integer","integer","string","double","enum","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["name","price"],
        'max_length_columns' => ["name","is_var"],
        'max_length_values' => ["255","10"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["product_code","is_var","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","IN_STOCK","1","0","0","0","0"],
        'enum_columns' => ["is_var"],
        'enum_values' => ["IN_STOCK,IN_BALANCE,OUT_DEF"],
        ];