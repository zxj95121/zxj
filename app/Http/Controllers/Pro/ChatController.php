<?php

namespace App\Http\Controllers\Pro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ProChatGroupMember;
use App\Models\WechatUser;

class ChatController extends Controller
{
	//检查该用户是否为该群成员
    public function checkMember(Request $request)
    {
    	$openid = $request->input('openid');
    	$result = ProChatGroupMember::checkMember($openid);

    	return response()->json(['result' => $result]);
    }

    // 添加新的user用户
    public function newWechatUser(Request $request)
    {
    	$openid = $request->input('openid');
    	$nickName = $request->input('nickName');
    	$gender = $request->input('openid');
    	$avatarUrl = $request->input('avatarUrl');
    	
    	if (ProChatGroupMember::checkMember($openid) == '404') {
    		//验证是否确实不存在该用户
    		WechatUser::newUser($openid, $nickName, $gender, $avatarUrl);
    		return response()->json(['result' => '0']);
    	}
    }
}
