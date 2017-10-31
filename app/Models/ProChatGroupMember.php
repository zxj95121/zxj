<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\WechatUser;

class ProChatGroupMember extends Model
{
    protected $table = 'pro_chat_group_member';

    public static function checkMember($openid) {
    	$num =  WechatUser::where('openid', $openid)
    		->count();
    	if ($num == 0) {
    		return response()->json(['errcode'=>'404']);//表示不存在该用户
    	}

    	$count = WechatUser::where('wechat_user.openid', $openid)
    		->leftJoin('pro_chat_group_member as pcgm', 'pcgm.user_id', 'wechat_user.id')
    		->count();

    	return $count;

    }
}
