<?php

namespace App\Http\Controllers\Zxj;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\LeaveMessage;

use Session;
use DB;

class DashBoardController extends Controller
{
	public function dashboard(Request $request)
	{
		// echo Session::get('zxjUrl');
		return view('zxj.dashboard');
	}

	public function login(Request $request)
	{
		Session::put('zxjId', 1);
	}

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
}
