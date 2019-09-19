<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifySendMessage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pro_chat_record', function (Blueprint $table) {
            $table->dropColumn('type');
        });
        
        Schema::table('pro_chat_record', function (Blueprint $table) {
            $table->tinyInteger('type')->default(1)->after('user_id');
        });

        Schema::table('wechat_user', function (Blueprint $table) {
            $table->integer('worker_id')->default(0)->after('status')->comment('worker_man进程ID');
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
