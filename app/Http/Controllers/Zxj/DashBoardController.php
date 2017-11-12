<?php

namespace App\Http\Controllers\Zxj;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

use Session;

class DashBoardController extends BaseController
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
}
