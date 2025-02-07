<?php

use App\Libs\Date;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTimezones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timezones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('timezone_code')->default(0)->unique()->index();
            $table->char('timezone');
            $table->char('abbreviation')->nullable(true);
            $table->char('utc_offset')->nullable(true);

            $table->boolean('status')->default(1);
            $table->boolean('is_deleted')->default(0);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->index(['status', 'is_deleted']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        DB::table('timezones')->delete();
        $timezones = [
            [
                'id' => 1,
                'timezone_code' => defaultTimezoneCode(),
                'timezone' => 'America/New_York',
                'created_at' => Date::now()->toDateTimeString(),
                'updated_at' => Date::now()->toDateTimeString(),
            ]
        ];

        DB::table('timezones')->insert($timezones);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timezones');
    }
}
