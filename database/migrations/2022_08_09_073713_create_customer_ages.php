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
        Schema::create('customer_ages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_age_code')->default(0)->unique();
            $table->bigInteger('customer_code')->unique()->comment('customer code');

            $table->integer('age')->index()->comment('age choosing for customer');

            $table->timestamps();
        });

        pushMigration('ages','customer','customerAge');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_ages');
    }
};
