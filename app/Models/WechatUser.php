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
    	$flight->gender = $gender;
    	$flight->headimgurl = $avatar;
    	$flight->save();

        return $flight->id;
    }

    /*是否为系统用户，如果不是并且带了相关信息则自动创新建新用户*/
    public static function isUser($openid, $nickname='', $gender='', $avatar='')
    {
        $count = WechatUser::where('openid', $openid)
            ->count();
        if ($count < 1) {
            if ($nickname && $gender && $avatar) {
                WechatUser::newUser($openid, $nickname, $gender, $avatar);
                return true;
            } else {
                return false;
            }
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