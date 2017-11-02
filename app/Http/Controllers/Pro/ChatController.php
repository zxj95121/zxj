<?php

namespace App\Http\Controllers\Pro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ProChatGroupMember;
use App\Models\WechatUser;
use App\Models\ProChatGroup;

class ChatController extends Controller
{
	//检查该用户是否为该群成员
    public function checkMember(Request $request)
    {
    	$openid = $request->input('openid');
    	$result = ProChatGroupMember::checkMember($openid);

    	return response()->json($result);
    }

    // 添加新的user用户
    public function newWechatUser(Request $request)
    {
    	$openid = $request->input('openid');
    	$nickName = $request->input('nickName');
    	$gender = $request->input('gender');
    	$avatarUrl = $request->input('avatarUrl');
    	
    	if (ProChatGroupMember::checkMember($openid) == '404') {
    		//验证是否确实不存在该用户
    		$id = WechatUser::newUser($openid, $nickName, $gender, $avatarUrl);
    		return response()->json(['result' => '0', 'id'=>$id]);
    	}
    }

    /*获取所有群聊*/
    public function getGroup(Request $request)
    {
    	$groupArr = ProChatGroup::getGroup();
    	return response()->json($groupArr);

    }
}
