<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Resume\BasicController;

use Session;

class HomeController extends BasicController
{
    protected $userinfo;

    public function home()
    {
        /* 取用户信息 */
        $this->getUserInfo(session('resId'));

        return view('resume/home', ['userinfo' => $this->userinfo]); 
    }
}
