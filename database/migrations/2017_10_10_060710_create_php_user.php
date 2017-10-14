<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhpUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('php_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account')->comment('账户');
            $table->string('password')->comment('密码');
            $table->string('headimgurl')->comment('头像地址');
            $table->string('qq')->comment('qq号码');
            $table->string('tel')->comment('手机号码');
            $table->tinyInteger('status')->default(1);
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
