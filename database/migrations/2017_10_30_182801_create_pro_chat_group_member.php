<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProChatGroupMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_chat_group_member', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->comment('群聊ID');
            $table->integer('user_id')->comment('用户ID');
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
