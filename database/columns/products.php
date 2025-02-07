<?php return [
        'comments' => ["","","product name","product in vars","product in colors","product price","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","product_code","name","in_vars","in_colors","price","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","product_code"],
        'types' => ["integer","integer","string","enum","enum","double","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["name","in_vars","in_colors","price"],
        'max_length_columns' => ["name","in_vars","in_colors"],
        'max_length_values' => ["255","1","5"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["product_code","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","1","0","0","0","0"],
        'enum_columns' => ["in_vars","in_colors"],
        'enum_values' => ["A,B,C","TIN,BLOOD,OLD"],
        ];