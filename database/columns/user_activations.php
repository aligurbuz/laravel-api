<?php return [
        'comments' => ["","","","User activation values : None or Sms or Email","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","user_activation_code","user_code","options","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","user_activation_code","user_code"],
        'types' => ["integer","integer","integer","enum","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["user_activation_code","user_code","options"],
        'max_length_columns' => ["options"],
        'max_length_values' => ["5"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["1","0","0","0","0"],
        'enum_columns' => ["options"],
        'enum_values' => ["None,Sms,Email"],
        ];