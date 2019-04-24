<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\resume\ResUserModel;

class LoginController extends Controller
{
    
    public function home(Request $request)
    {
        $msg = '';

        if ($request->isMethod('post')) {
            /* 进行用户登录 */
            $data = $request->all();

            if (!ResUserModel::checkExit($data['name'])) {
                $msg = '不存在该用户';
            } else {
                $res = ResUserModel::checkPasswd($data['name'], $data['passwd']);
                if (!$res) {
                    $msg = '密码错误';
                }
            }

            if (!$msg) {
                session(['resId' => $res['id'], 'resAdmin' => $res['identity']]);
                /* 判断用户是不是管理员，是的话加个特别的session */
                return redirect('resume/home');
            }
        }
        
        return view('resume/login', ['msg' => $msg]); 
    }

    /* 退出登录 */
    public function login_out(Request $request)
    {
        $request->session()->flush();
        return redirect('resume/login');
    }
}
