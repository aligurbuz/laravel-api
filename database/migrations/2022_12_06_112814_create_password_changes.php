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
        Schema::create('password_changes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('password_change_code')->default(0)->unique();

            $table->string('email')->comment('user email');

            $table->string('hash')->comment('one-time code to be used for password reset');
            $table->dateTime('client_time')->nullable()->comment('represents the current time for password change');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            //$table->boolean('status')->default(1)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            //$table->index(['status','is_deleted']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->unique(['email', 'hash']);
        });

        pushMigration('changes', 'password', 'passwordChange');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_changes');
    }
};
