<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Resume\BasicController;

use Session;

class MessageController extends BasicController
{
    protected $userinfo;

    public function index()
    {
        /* 取用户信息 */
        $this->getUserInfo(session('resId'));

        return view('resume/message/index', ['userinfo' => $this->userinfo]); 
    }
}
