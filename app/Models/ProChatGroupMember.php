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

    public static function isInGroup($openid, $id, $group_id) {
    	$user_id = WechatUser::getId($openid);

    	if ($user_id == $id) {
    		return array('result' => 5);
    	}

    	$preObj = WechatUser::find($id);//表示邀请人
    	$nowObj = WechatUser::find($user_id);//表示受邀人

    	if ($preObj->gender + $nowObj->gender == 3) {
    		//再判断两人是不是已在群聊中
    		$preCount = ProChatGroupMember::where('user_id', $id)
    			->where('group_id', $group_id)
    			->count();
    		$nowCount = ProChatGroupMember::where('user_id', $user_id)
    			->where('group_id', $group_id)
    			->count();
    		if (!$preCount && !$nowCount) {
    			/*表示都不是群聊成员*/
    			return array('result' => 0, 'pre' => $preObj->nickname);
    		} else if($preCount && $nowCount) {
    			//都是系统成员了
    			return array('result' => 1, 'pre' => $preObj->nickname, 'now' => $nowObj->nickname);
    		} else if ($preCount) {
    			return array('result' => 2, 'data' => $preObj->nickname);
    		} else {
    			return array('result' => 2, 'data' => $nowObj->nickname);
    		}
    	} else if ($preObj->gender == 0) {
    		//邀请人性别不明
    		return array('result' => 3, 'data' => $preObj->nickname);
    	} else if ($nowObj->gender == 0) {
    		//受邀人性别不明
    		return array('result' => 3, 'data' => $nowObj->nickname);
    	} else {
    		return array('result' => 4);
    	}
    }

    public static function joinGroup($openid, $id, $group_id)
    {
    	$user_id = WechatUser::getId($openid);

    	$flight = new ProChatGroupMember();
    	$flight->group_id = $group_id;
    	$flight->user_id = $user_id;
    	$flight->save();

    	$flight = new ProChatGroupMember();
    	$flight->group_id = $group_id;
    	$flight->user_id = $id;
    	$flight->save();
    }
}
