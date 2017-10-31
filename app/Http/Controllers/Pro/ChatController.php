<?php

namespace App\Http\Controllers\Pro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ProChatGroupMember;

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
    	$userInfo = $request->input('userInfo');
    	echo $userInfo->openid;
    	var_dump($userInfo);
    }
}
