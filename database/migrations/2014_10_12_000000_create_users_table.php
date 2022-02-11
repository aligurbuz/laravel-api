<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Services\Date;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_code')->unique()->index();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('status')->default(0)->comment('status:1 - active,status:0 passive');
            $table->boolean('is_deleted')->default(0)->comment('is_deleted:0 - undeleted,is_deleted:1 deleted');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->index(['email','password']);
        });

        DB::table('users')->delete();
        $users = [
          [
              'id' => 1,
              'user_code' => crc32(config('app.name').'_1user'),
              'name' => 'userTest',
              'email' => 'test@gmail.com',
              'password' => Hash::make(123456),
              'status' => 1,
              'created_at' => Date::now()->toDateTimeString(),
              'updated_at' => Date::now()->toDateTimeString(),
          ]
        ];

        DB::table('users')->insert($users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
