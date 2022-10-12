<?php return [
        'comments' => ["","","customer code","customer address","customer address","customer phone code","customer phone","customer linkedin address","customer facebook address","customer twitter address","default customer address","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","customer_contact_code","customer_code","address","zipcode","phone_code","phone","linkedin","facebook","twitter","is_default","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","customer_contact_code","customer_code","status","is_deleted","customer_code","is_deleted"],
        'types' => ["integer","integer","integer","string","string","string","string","string","string","string","integer","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["customer_code","address","zipcode","phone_code","phone"],
        'max_length_columns' => ["address","zipcode","phone_code","phone","linkedin","facebook","twitter"],
        'max_length_values' => ["65535","255","255","255","255","255","255"],
        'boolean_values' => ["is_default","status","is_deleted"],
        'default_keys' => ["customer_contact_code","is_default","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","0","1","0","0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];