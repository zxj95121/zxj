<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\WechatUser;
use Wechat;

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
    		->select('pro_chat_record.content as content', 'pro_chat_record.type as type', 'pro_chat_record.user_id as uid', 'pro_chat_record.created_at as created_at', 'wu.headimgurl as headimgurl', 'wu.nickname as nickname', 'pro_chat_record.id as rid')
    		->limit(20)
    		->get()
    		->toArray();

    	$records = Wechat::deal_sqlResult($records, true, true);
    	return $records;
    }

    //获取某个群聊组的前十个聊天记录
    public static function getChats_prev($group_id, $rid)
    {
        $records = ProChatRecord::where('pro_chat_record.status', 1)
            ->where('pro_chat_record.group_id', $group_id)
            ->where('pro_chat_record.id', '<', $rid)
            ->leftJoin('wechat_user as wu', 'wu.id', '=', 'pro_chat_record.user_id')
            ->orderBy('pro_chat_record.created_at', 'desc')
            ->select('pro_chat_record.content as content', 'pro_chat_record.type as type', 'pro_chat_record.user_id as uid', 'pro_chat_record.created_at as created_at', 'wu.headimgurl as headimgurl', 'wu.nickname as nickname', 'pro_chat_record.id as rid')
            ->limit(10)
            ->get()
            ->toArray();

        $records = Wechat::deal_sqlResult($records, true, true);
        return $records;
    }
}
