<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('currency_code')->default(0)->unique()->index();
            $table->char('symbol',10)->comment('currency symbol ($,€ etc.)');
            $table->char('name',20)->comment('currency name (EURO,USD etc.)');
            $table->boolean('symbol_place_status')->default(1)->comment('Indicates whether the symbol is to the right or left of the number.(0:left,1:right)');

            $table->boolean('status')->default(1)->comment('0:active 1:passive');
            $table->boolean('is_deleted')->default(0)->comment('0:notDeleted 1:deleted');
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
            $table->bigInteger('deleted_by')->default(0);
            $table->index(['status','is_deleted']);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        DB::table('currencies')->delete();
        $currencies = [
            [
                'id' => 1,
                'currency_code' => crc32(config('app.name').'_usdCurrency'),
                'symbol' => '$',
                'name' => 'USD',
                'symbol_place_status' => 0,
                'created_at' => Date::now()->toDateTimeString(),
                'updated_at' => Date::now()->toDateTimeString(),
            ],
            [
                'id' => 2,
                'currency_code' => crc32(config('app.name').'_euroCurrency'),
                'symbol' => '€',
                'name' => 'EURO',
                'symbol_place_status' => 0,
                'created_at' => Date::now()->toDateTimeString(),
                'updated_at' => Date::now()->toDateTimeString(),
            ]
        ];

        DB::table('currencies')->insert($currencies);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
