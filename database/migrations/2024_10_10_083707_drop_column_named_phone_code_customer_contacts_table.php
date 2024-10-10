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
        Schema::table('customer_contacts', function (Blueprint $table) {
            $table->dropColumn('phone_code'); 
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_contacts', function (Blueprint $table) {
            $table->dropColumn('phone_code'); 
            //
        });
    }
};
