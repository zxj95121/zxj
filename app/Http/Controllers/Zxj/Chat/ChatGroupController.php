<?php

namespace App\Http\Controllers\Zxj\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatGroupController extends Controller
{
    public function add(Request $request)
    {
    	return view('zxj.chat.addChatGroup');
    }
}
