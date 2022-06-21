<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_code')->unique()->index();
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

        pushMigration('profiles','customer','customer');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
