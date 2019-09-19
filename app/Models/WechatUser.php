<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WechatUser extends Model
{
    protected $table = 'wechat_user';

    /*新建一个微信用户*/
    public static function newUser($openid, $nickname, $gender, $avatar)
    {
    	$flight = new WechatUser();
    	$flight->openid = $openid;
    	$flight->nickname = $nickname;
    	$flight->gender = ''.$gender;
    	$flight->headimgurl = $avatar;
    	$flight->save();

        return $flight->id;
    }

    /*是否为系统用户，如果不是带了相关信息则自动创新建新用户*/
    public static function isUser($openid, $nickname, $gender, $avatar)
    {
        $count = WechatUser::where('openid', $openid)
            ->count();
        if ($count < 1) {
            // WechatUser::newUser($openid, $nickname, $gender, $avatar);
            $flight = new WechatUser();
            $flight->openid = $openid;
            $flight->nickname = $nickname;
            $flight->gender = ''.$gender;
            $flight->headimgurl = $avatar;
            $flight->save();
            return true;
        } else {
            return true;
        }
    }

    /*通过openid获取主键id,请求此方法时openid必存在*/
    public static function getId($openid)
    {
        $obj = WechatUser::where('openid', $openid)
            ->select('id')
            ->first();
        return $obj->id;
    }
}
