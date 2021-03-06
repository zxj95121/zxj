<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\WechatUser;
use App\Models\ProChatGroup;

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

        $preObj = WechatUser::find($id);//表示邀请人

    	if ($user_id == $id) {
    		return array('result' => 6, 'nickname' => $preObj->nickname);
    	}

    	
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
    			return array('result' => 0, 'pre' => $preObj->nickname, 'nickname' => $preObj->nickname);
    		} else if($preCount && $nowCount) {
    			//都是系统成员了
    			return array('result' => 1, 'pre' => $preObj->nickname, 'now' => $nowObj->nickname, 'nickname' => $preObj->nickname);
    		} else if ($preCount) {
    			return array('result' => 2, 'data' => $preObj->nickname, 'nickname' => $preObj->nickname);
    		} else {
    			return array('result' => 2, 'data' => $nowObj->nickname, 'nickname' => $preObj->nickname);
    		}
    	} else if ($preObj->gender == 0) {
    		//邀请人性别不明
    		return array('result' => 3, 'data' => $preObj->nickname, 'nickname' => $preObj->nickname);
    	} else if ($nowObj->gender == 0) {
    		//受邀人性别不明
    		return array('result' => 3, 'data' => $nowObj->nickname, 'nickname' => $preObj->nickname);
    	} else if ($nowObj->gender == $preObj->gender){
    		return array('result' => 4, 'pre' => $preObj->nickname, 'now' => $nowObj->nickname, 'nickname' => $preObj->nickname);
    	} else {
    		return array('result' => 5, 'pre' => $preObj->nickname, 'now' => $nowObj->nickname, 'nickname' => $preObj->nickname);
    	}
    }

    public static function joinGroup($openid, $id, $group_id)
    {
    	$user_id = WechatUser::getId($openid);

        //表成员数量
        $count = ProChatGroupMember::where('group_id', $group_id)
            ->where('status', '1')
            ->count();

        if ($count >= 20) {
            return 1;//表示成员数量已达上限
        }

    	$flight = new ProChatGroupMember();
    	$flight->group_id = $group_id;
    	$flight->user_id = $user_id;
    	$flight->save();

    	$flight2 = new ProChatGroupMember();
    	$flight2->group_id = $group_id;
    	$flight2->user_id = $id;
    	$flight2->save();
        

        $flight3 = ProChatGroup::find($group_id);
        $flight3->group_num = (int)($flight3->group_num) + 2;
        $flight3->save();
        return 2;//true
    }
}
