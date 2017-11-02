<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProChatGroup extends Model
{
    //
    protected $table = 'pro_chat_group';

    public static function getGroup()
    {
    	$groupArr = ProChatGroup::where('status', 1)
    		->select('group_name', 'group_imgurl', 'group_num')
    		->get()
    		->toArray();
    	return $groupArr;
    }
}
