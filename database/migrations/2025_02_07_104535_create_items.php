<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_code')->default(0)->unique();
            $table->bigInteger('product_code')->index()->comment('product code');

            $table->char('name')->comment('item name');
            $table->enum('sufficient_vary', ['J','T','M'])->comment('item sufficient vary');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->boolean('status')->default(1)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        pushMigration('items','store','item');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
