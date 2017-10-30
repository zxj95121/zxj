<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProChatGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_chat_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name')->comment('群名称');
            $table->string('group_imgurl')->comment('群头像地址');
            $table->string('group_num')->comment('群人数');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        Schema::create('wechat_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('openid', 100)->unique()->comment('唯一索引openid');
            $table->string('headimgurl')->comment('用户头像');
            $table->string('nickname')->comment('用户昵称');
            $table->enum('gender', ['0', '1', '2'])->comment('性别,1表示男，2表示女，0表示性别未知');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        Schema::create('pro_chat_record', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->comment('群聊ID');
            $table->integer('user_id')->comment('用户ID');
            $table->tinyInteger('type')->comment('聊天内容类型，1表示文字，2表示图片');
            $table->text('content')->comment('聊天内容详情');
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
