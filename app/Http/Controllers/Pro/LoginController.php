<?php

namespace App\Http\Controllers\Pro;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

use Wechat;

class LoginController extends BaseController
{
    public function getkey(Request $request)
    {
    	$code = $request->input('code');

    	$appid = getenv('PROID');
    	$secret = getenv('PROSECRET');
    	$url = 'https://api.weixin.qq.com/sns/jscode2session?appid='.$appid.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code';
    	$data = Wechat::curl($url);
    	if (isset($data['openid']))
    		return response()->json(['openid'=>$data['openid']]);
    }
}
