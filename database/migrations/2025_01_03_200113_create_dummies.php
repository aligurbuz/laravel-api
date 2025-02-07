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
        Schema::create('dummies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dummy_code')->default(0)->unique();

            $table->char('endpoint_id')->comment('endpoint id for dummy data');

            //$table->integer('sequence_time')->default(0);
            //$table->integer('sequence')->default(1);

            $table->bigInteger('created_by')->default(0);
            $table->timestamps();
        });

        pushMigration('dummy', 'support', 'dummy');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dummies');
    }
};
