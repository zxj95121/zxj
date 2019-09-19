<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\ProChatGroup;
use DB;

class ProChatGroup extends Model
{
    //
    protected $table = 'pro_chat_group';

    public static function getGroup()
    {
    	$groupArr = ProChatGroup::where('pro_chat_group.status', 1)
            ->leftJoin('pro_chat_group_member as pcgm', 'pcgm.group_id', 'pro_chat_group.id')
            ->groupBy('pro_chat_group.id')
    		->select(DB::raw('pro_chat_group.id, count(*) as count, pro_chat_group.group_name, pro_chat_group.group_imgurl, pro_chat_group.group_num as count'))
    		->get()
    		->toArray();

        // foreach ($groupArr as $key => $value) {
        //     if ($value['count'] == 1) {
        //         $groupArr[$key]['count'] = 0;
        //     }
        // }
    	return $groupArr;
    }

    //获取群聊名称
    public static function getGroupName($group_id)
    {
        $obj = ProChatGroup::find($group_id);
        return $obj->group_name;
    }
}
