<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * php artisan make:import UsersImport --model=User
     * excel formatter : name,email,password
     *
     * @param array $row
     * @return Model|User
     */
    public function model(array $row): Model|User
    {
        return new User([
            'user_code'     => generateHash(),
            'role_code'     => 2963074553,
            'name'          => $row[0],
            'email'         => $row[1],
            'password'      => Hash::make($row[2]),
        ]);
    }
}
