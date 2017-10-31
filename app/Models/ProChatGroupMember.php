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
    		return '404';//表示不存在该用户
    	}

    	$first = WechatUser::where('wechat_user.openid', $openid)
    		->leftJoin('pro_chat_group_member as pcgm', 'pcgm.user_id', 'wechat_user.id')
    		->select('pcgm.group_id as group_id')
    		->first();

    	dd($first->toArray());

    	if ($first->group_id)
    		return 1;
    	else
    		return 0;
    	return $count;

    }
}
