<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable()->default(0)->index();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        //\Illuminate\Support\Facades\Artisan::call('create:crud comment user user_comment');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
