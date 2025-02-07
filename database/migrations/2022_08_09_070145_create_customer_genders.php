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
        Schema::create('customer_genders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_gender_code')->default(0)->unique();
            $table->bigInteger('customer_code')->unique()->comment('customer code');

            $table->bigInteger('gender_code')->index()->comment('customer gender code');

            $table->timestamps();
        });

        pushMigration('genders', 'customer', 'customerGender');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_genders');
    }
};
