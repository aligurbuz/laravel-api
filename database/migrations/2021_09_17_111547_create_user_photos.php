<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_photos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_photo_code')->default(0)->unique();
            $table->bigInteger('user_code');
            $table->char('user_image');
            $table->char('image_name')->nullable(true);
            $table->char('image_description')->nullable(true);

            $table->index(['user_code','status','is_deleted'],'userStatusIsDeleted');
            $table->index(['user_code','is_deleted'],'userIsDeleted');

            $table->integer('sequence_time')->default(0);
            $table->integer('sequence')->default(1);
            $table->index(['sequence_time','sequence']);

            $table->boolean('status')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_photos');
    }
}
