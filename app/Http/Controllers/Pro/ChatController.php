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
    	
    	if (ProChatGroupMember::checkMember($openid)['result'] == '404') {
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

    /*当前用户是否可以加入群聊的一系列状态获取*/
    public function isInGroup(Request $request)
    {
    	$openid = $request->input('openid');
    	$nickName = $request->input('nickName');
    	$gender = $request->input('gender');
    	$avatarUrl = $request->input('avatarUrl');
    	$id = $request->input('id');
    	$group_id = $request->input('group_id');

    	/*查看openid是否为系统用户，不是自动创建*/
    	WechatUser::isUser($openid, $nickName, $gender, $avatarUrl);

    	/*进行入群前的判断，是否异性，是否都不是群成员等等*/
    	$result = ProChatGroupMember::isInGroup($openid, $id, $group_id);

    	return response()->json($result);
    }

    /*重新验证身份并进行一系列状态获取*/
    public function regetInfo(Request $request)
    {
    	$openid = $request->input('openid');
    	$nickName = $request->input('nickName');
    	$gender = $request->input('gender');
    	$avatarUrl = $request->input('avatarUrl');
    	$id = $request->input('id');
    	$group_id = $request->input('group_id');

    	/*更新下数据库的gender*/
    	WechatUser::where('openid', $openid)
    		->update(['gender' => $gender]);

    	/*进行入群前的判断，是否异性，是否都不是群成员等等*/
    	$result = ProChatGroupMember::isInGroup($openid);

    	return response()->json($result);
    }

    /*用户同意加入群聊*/
    public function joinGroup(Request $request)
    {
    	$openid = $request->input('openid');
    	$id = $request->input('id');
    	$group_id = $request->input('group_id');

    	ProChatGroupMember::joinGroup($openid, $id, $group_id);

    	return response()->json(['result' => 0]);
    }

}
