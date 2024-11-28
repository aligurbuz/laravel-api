<?php

namespace Database\Seeders;

use App\Facades\Database\Authenticate\ApiKey;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        Gender::factory(2)->sequence(
            ['gender_code' => crc32('male'),'name' => 'male'],
            ['gender_code' => crc32('female'), 'name' => 'female']
        )->create();

        ApiKey::create('admin');
        ApiKey::create('web');

        $adminRoleCode = crc32('firstRoleCode');

        $roles = [
            [
                'id' => 1,
                'role_code' => $adminRoleCode,
                'role_name' => 'Administrator',
                'is_administrator' => '1',
                'roles' => json_encode([[]])
            ]
        ];

        DB::table('roles')->insert($roles);

        Artisan::call('permission');
        Artisan::call('give:permission', ['roleCode' => $adminRoleCode]);
    }
}
