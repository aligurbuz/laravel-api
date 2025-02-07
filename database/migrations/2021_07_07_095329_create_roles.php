<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_code')->default(0)->unique()->index();
            $table->bigInteger('role_app_code')->default(0)->index();
            $table->char('role_name', 30);
            $table->tinyInteger('is_administrator')->default(0);
            $table->jsonb('roles');

            $table->boolean('status')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->index(['status', 'is_deleted']);
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
        Schema::dropIfExists('roles');
    }
}
