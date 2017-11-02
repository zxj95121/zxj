<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WechatUser extends Model
{
    protected $table = 'wechat_user';

    public static function newUser($openid, $nickname, $gender, $avatar)
    {
    	$flight = new WechatUser();
    	$flight->openid = $openid;
    	$flight->nickname = $nickname;
    	$flight->gender = $gender;
    	$flight->headimgurl = $avatar;
    	$flight->save();

        return $flight->id;
    }
}
