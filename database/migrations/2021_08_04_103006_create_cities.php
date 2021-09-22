<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Services\Date;

class CreateCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('city_code')->default(0)->unique()->index();
            $table->bigInteger('country_code')->index();
            $table->char('city_name',100);

            $table->boolean('status')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->index(['status','is_deleted']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        DB::table('cities')->delete();
        $cities = [
            [
                'id' => 1,
                'city_code' => crc32('city_1'),
                'country_code' => '4200868100',
                'city_name' => 'Manhattan',
                'created_at' => Date::now()->toDateTimeString(),
                'updated_at' => Date::now()->toDateTimeString(),
            ]
        ];

        DB::table('cities')->insert($cities);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
