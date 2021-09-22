<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Services\Date;

class CreateDistricts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('district_code')->default(0)->unique()->index();
            $table->bigInteger('city_code')->index();
            $table->char('district_name',100);

            $table->boolean('status')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->index(['status','is_deleted']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        DB::table('districts')->delete();
        $districts = [
            [
                'id' => 1,
                'district_code' => crc32('district_1'),
                'city_code' => '2013326558',
                'district_name' => 'Time Square',
                'created_at' => Date::now()->toDateTimeString(),
                'updated_at' => Date::now()->toDateTimeString(),
            ]
        ];

        DB::table('districts')->insert($districts);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
