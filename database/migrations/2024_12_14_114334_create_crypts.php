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
        Schema::create('crypts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crypt_code')->default(0)->unique();
            $table->string('api_key')->comment('system api key');
            $table->bigInteger('authenticate')->comment('authenticate code');
            $table->json('body')->comment('client body as array');

            //$table->char('column')->comment('');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            //$table->boolean('status')->default(1)->comment('0:active 1:passive');
            //$table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            //$table->bigInteger('created_by')->default(0);
            //$table->bigInteger('updated_by')->default(0);
            //$table->bigInteger('deleted_by')->default(0);
            //$table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('crypt','support','crypt');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crypts');
    }
};
