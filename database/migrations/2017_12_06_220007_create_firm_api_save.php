<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmApiSave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_api_save', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('请求的接口名称');
            $table->text('request')->comment('发送的数据')->nullable();
            $table->text('result')->comment('返回的数据');
            $table->tinyInteger('status')->default(1)->comment('1表示可用');
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
