<?php

namespace App\Http\Controllers\Algorithm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\PhpUser;
use Session;

class AlgorIndexController extends Controller
{
    public function index(Request $request)
    {
        $userinfo = PhpUser::getUser();
        return view('algorithm.index',['userinfo'=>$userinfo]);
    }

    /*展示问题详情*/
    public function question($id, Request $request)
    {
        $userinfo = PhpUser::getUser();
        return view('algorithm.question',['userinfo'=>$userinfo]);
    }

    /*登录页*/
    public function login(Request $request)
    {
        $userinfo = PhpUser::getUser();
        return view('algorithm.login',['userinfo'=>$userinfo]);
    }
}