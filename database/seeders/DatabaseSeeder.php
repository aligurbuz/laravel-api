<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

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

        \App\Facades\Database\Authenticate\ApiKey::create('admin');
        \App\Facades\Database\Authenticate\ApiKey::create('web');

        Artisan::call('permissions');
    }
}
