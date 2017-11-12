<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\ProChatGroup;

class ProChatGroup extends Model
{
    //
    protected $table = 'pro_chat_group';

    public static function getGroup()
    {
    	$groupArr = ProChatGroup::where('status', 1)
    		->select(DB::raw('id, count(*) as count, group_name, group_imgurl, group_num'))
    		->get()
    		->toArray();
    	return $groupArr;
    }

    //获取群聊名称
    public static function getGroupName($group_id)
    {
        $obj = ProChatGroup::find($group_id);
        return $obj->group_name;
    }
}
