<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\resume\ResUserModel;

use Session;

class BasicController extends Controller
{
    protected $userinfo;

    public function getUserInfo($uid)
    {
        $this->userinfo = ResUserModel::find($uid);
    }

    public function checkAdmin()
    {
        if (!session('resAdmin')) {
            echo view('resume/403');
            die;
        }
        return false;
    }

    /* show_json */
    public function show_json($code, $msg='', $data=array(), $count=0)
    {
        return response()->json(['code' => $code, 'msg' => $msg, 'data' => $data, 'count' => $count]);
    }
}
