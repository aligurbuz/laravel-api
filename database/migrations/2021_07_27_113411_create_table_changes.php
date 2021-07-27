<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_changes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('table_change_code')->default(0)->unique()->index();
            $table->char('table_name',100);
            $table->char('column_name',100);
            $table->text('old_data');
            $table->text('new_data');

            $table->boolean('status')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->index(['status','is_deleted']);
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
        Schema::dropIfExists('table_changes');
    }
}
