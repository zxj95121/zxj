<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\WechatUser;

class ProChatRecord extends Model
{
    protected $table = 'pro_chat_record';

    //获取某个群聊组最初的若干条数组
    public static function getChats_init($group_id)
    {
    	$records = ProChatRecord::where('pro_chat_record.status', 1)
    		->where('pro_chat_record.group_id', $group_id)
    		->leftJoin('wechat_user as wu', 'wu.id', '=', 'pro_chat_record.user_id')
    		->orderBy('pro_chat_record.created_at', 'desc')
    		->select('pro_chat_record.content as content, pro_chat_record.type as type, pro_chat_record.user_id as uid, pro_chat_record.created_at as created_at, wu.headimgurl as headimgurl, wu.nickname as nickname')
    		->limit(3)
    		->get();

    	return $records;
    }
}
