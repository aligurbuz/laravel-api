<?php

namespace Database\Factories;

use App\Facades\Support\Env\Env;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $list = [
            'id' => 1,
            'user_code' => crc32(config('app.name').'_1user'),
            'role_code' => '2963074553',
            'username' => 'userTest',
            'name' => 'userTest',
            'email' => 'test@gmail.com',
            'password' => Hash::make(123456),
            'status' => 1,
        ];

        Env::set([
            'ADMIN_USER_EMAIL' => $list['email'],
            'ADMIN_USER_PASSWORD' => '123456',
        ]);

        return  $list;
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
