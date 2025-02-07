<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_passwords', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_password_code')->default(0)->unique();
            $table->bigInteger('user_code')->comment('user code');

            $table->char('password')->comment('user password value');
            $table->timestamp('expired_at')->comment('user password expired_at value');
            $table->boolean('status')->default(1)->comment('0:active 1:passive');

            $table->index(['user_code', 'status']);

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->timestamps();
        });

        pushMigration('password', 'user', 'userPassword');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_passwords');
    }
};
