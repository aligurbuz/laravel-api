<?php

namespace Database\Seeders;

use App\Facades\Support\Faker\Faker;
use App\Libs\HashGenerator;
use App\Models\ApiKey;
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

        ApiKey::factory(2)->sequence(
            ['key' => 'admin','value' => (new HashGenerator())->encode('admin_'.rand(0,100000).'_'.Faker::stringFaker().'_'.time())],
            ['key' => 'web','value' => (new HashGenerator())->encode('web_'.rand(0,100000).'_'.Faker::stringFaker().'_'.time())],
        )->create();

        Artisan::call('permissions');
    }
}
