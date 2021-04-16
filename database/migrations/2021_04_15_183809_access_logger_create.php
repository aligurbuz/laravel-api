<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccessLoggerCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_loggers', function (Blueprint $table) {
            $table->id();
            $table->string('client_key')->index();
            $table->string('endpoint_name')->index();
            $table->bigInteger('response_code')->default(0)->index();
            $table->string('http_method',10);
            $table->jsonb('http_client_headers');
            $table->jsonb('http_client_params_data');
            $table->jsonb('http_client_body_data');
            $table->integer('response_status');
            $table->string('exception_file');
            $table->string('exception_line');
            $table->string('exception_message');
            $table->jsonb('exception_trace');
            $table->jsonb('response');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
