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
        Schema::create('customer_contacts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_contact_code')->default(0)->unique();
            $table->bigInteger('customer_code')->comment('customer code');

            $table->text('address')->comment('customer address');
            $table->string('zipcode')->comment('customer address');
            $table->string('phone_code')->comment('customer phone code');
            $table->string('phone')->comment('customer phone');
            $table->string('linkedin')->nullable()->comment('customer linkedin address');
            $table->string('facebook')->nullable()->comment('customer facebook address');
            $table->string('twitter')->nullable()->comment('customer twitter address');
            $table->boolean('is_default')->default(0)->comment('default customer address');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->boolean('status')->default(1)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            //$table->index(['status','is_deleted']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->index(['customer_code', 'status', 'is_deleted'], 'customerStatDel');
            $table->index(['customer_code', 'is_deleted'], 'customerDel');
        });

        pushMigration('contacts', 'customer', 'customerContact');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_contacts');
    }
};
