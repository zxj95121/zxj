<?php

namespace App\Http\Controllers\Zxj\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\LeaveMessage;

use Session;

class LeaveMessageController extends Controller
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
		$message = LeaveMessage::where('status', 1)
			//1表示未读，2表示已读，0表示已删除
			->select('id', 'name', 'created_at', 'qq', 'tel', 'message', 'ip')
			->paginate(10);
		return view('zxj.message.leaveMessageNotRead', ['message'=>$message]);
	}

	/*所有留言*/
	public function all(Request $request)
	{
		return view('zxj.message.leaveMessageAll');
	}
}
