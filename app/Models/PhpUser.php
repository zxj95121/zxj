<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Session;

class PhpUser extends Model
{
    protected $table = 'php_user';

    static function getUser()
    {
        $phpuid = Session::get('phpuid');
        if (!$phpuid) {
            return array('data-id'=>'','account' => '未登录', 'headimgurl' => '/images/father/videoShow.png', 'href' => '/algorithm/login');
        }
        $flight = PhpUser::find($phpuid);
        return array('data-id'=>$flight->id,'account'=>$flight->account,'headimgurl'=>$flight->headimgurl,'href'=>'/algorithm/phpuser/'.$flight->id);
    }
}
