<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Wechat;

class LeaveMessage extends Model
{
    protected $table = 'leave_message';

    /*获取对应状态的数据*/
    public static function getAll($status=1, $prepare='=', $post=[])
    {
    	$message = LeaveMessage::where('status', $prepare, $status);
    	if(isset($post['name'])) {
    		$message = $message->where('name', 'like', '%'.$post['name'].'%');
    	}
    	if(isset($post['qq'])) {
    		$message = $message->where('qq', 'like', '%'.$post['qq'].'%');
    	}
    	if(isset($post['tel'])) {
    		$message = $message->where('tel', 'like', '%'.$post['tel'].'%');
    	}
			//1表示未读，2表示已读，0表示已删除
		$message = $message->select('id as rec_id', 'id', 'name', 'created_at', 'qq', 'tel', 'message', 'ip')
			->paginate(2);

		return $message;
    }

    /*获取单条留言详情*/
    public static function getSingle($id)
    {
    	$message = LeaveMessage::find($id);

		return $message;
    }

    /*设置留言为已读，status为2*/
    public static function setStatus2($id, $status)
    {
    	$message = LeaveMessage::find($id);
    	$message->status = $status;
    	$message->save();

    	$data = Wechat::curl('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip='.$message->ip);

		$obj =  [];
		$message = $message['attributes'];
		foreach ($message as $key => $value) {
			$obj[$key] = $value;
		}

		$address = '';
		if (isset($data['country'])) {
			$address = $data['country'].$data['province'].$data['city'];
		}

		$obj['address'] = $address;
		$obj = (object)$obj;

		return $obj;
    }
}
