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
    		return array('result' => '404');//表示不存在该用户
    	}

    	$first = WechatUser::where('wechat_user.openid', $openid)
    		->leftJoin('pro_chat_group_member as pcgm', 'pcgm.user_id', 'wechat_user.id')
    		->select('pcgm.group_id as group_id', 'wechat_user.id as id')
    		->first();

    	// dd($first->toArray());

    	if ($first->group_id)
    		return array('result' => 1, 'id' => $first->id);
    	else
    		return array('result' => 0, 'id' => $first->id);
    	return $count;

    }
}
