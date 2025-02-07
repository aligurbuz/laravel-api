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
        Schema::create('user_activations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_activation_code')->unique();
            $table->bigInteger('user_code')->unique();

            $table->enum('options', ['None', 'Sms', 'Email'])->comment('User activation values : None or Sms or Email');
            $table->string('hash')->nullable(true)->comment('one time hashing');

            //$table->boolean('status')->default(1)->comment('0:active 1:passive');
            //$table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            //$table->bigInteger('deleted_by')->default(0);
            //$table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('activations', 'user', 'userActivation');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_activations');
    }
};
