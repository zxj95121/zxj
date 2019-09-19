<?php

namespace App\Http\Controllers\Zxj\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

use App\Models\LeaveMessage;

use Session;
use Wechat;

class LeaveMessageController extends BaseController
{
	/*客户留言处理*/
    public function leavePost(Request $request)
	{
		$name = $request->input('name');
		$qq = $request->input('qq');
		$tel = $request->input('tel');
		$message = $request->input('message');

		$ip = $request->ip();

		if (!$request->ajax()) {
			exit();
		}

		$start = date('Y-m-d H:i:s', time()-60);
		$end =date('Y-m-d H:i:s');

		$count = LeaveMessage::whereBetween('created_at', [$start, $end])
			->count();
		
		if ($count > 0) {
			return response()->json(['errcode'=>1000]);
		}

		$flight = new LeaveMessage();
		$flight->name = $name;
		$flight->qq = $qq;
		$flight->tel = $tel;
		$flight->message = $message;
		$flight->ip = $ip;
		$flight->save();

		return response()->json(['errcode'=>0]);
	}

	/*未读留言*/
	public function notRead(Request $request)
	{
		$message = LeaveMessage::getAll();

		return view('zxj.message.leaveMessageNotRead', ['message'=>$message]);
	}

	/*所有留言*/
	public function all(Request $request)
	{
		$message = LeaveMessage::getAll('0', '>');
		// $post = $request->all();
		// unset($post['page']);
		return view('zxj.message.leaveMessageAll', ['message'=>json_encode($message)]);
	}

	public function allAjax(Request $request)
	{
		$post = $request->all();
		unset($post['page']);
		$message = LeaveMessage::getAll('0', '>', $post);
		// $param = array('sti'=>23, 'ifk'=>'vote');
		return response()->json(json_encode($message->appends($post)));
	}

	/*某个留言详情*/
	public function detail(Request $request, $id, $type)
	{
		$message = LeaveMessage::setStatus2($id, 2);/*设置为已读*/
		// $message = LeaveMessage::getSingle($id);

		// var_dump($message);
		// exit;

		return view('zxj.message.leaveMessageDetail', ['message'=>$message,'type'=>$type]);
	}
}
