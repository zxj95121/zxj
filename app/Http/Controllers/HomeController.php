<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wechat;
use View;

class HomeController extends Controller
{
    protected $headers = array(
        'Origin:https://admin.zxjxj.com/',
    );

    public function home()
    {
        $prefix = env('ADMINURL');
        
        $prefix = 'https://admin.zxjxj.com';
        $url = $prefix . '/api/poem/managePoem';
        $poems = Wechat::curl($url, null, $this->headers);
    	return view('home', ['poems' => $poems['data'], 'prefix' => $prefix]);
    }

    public function resume()
    {
        return view('resume');
    }

    public function wells()
    {
        return view('wells');
    }

    public function poem(Request $request)
    {
        $prefix = env('ADMINURL');
        $prefix = 'https://admin.zxjxj.com';
        $url = $prefix . '/api/poem/allpoems?pagesize=500';

        $poems = Wechat::curl($url, null, $this->headers);
        // var_dump($poems);
        return view('poem', ['poems' => $poems['data'], 'prefix' => $prefix]);
    }
    
    public function shenghong()
    {
        return view('shenghong');
    }

    public function yh()
    {
    	return view('yh');
    }

    public function introduce()
    {
    	return view('introduce');
    }

    public function dawanzi()
    {
        return view('dawanzi');
    }
    public function xiaotong()
    {
        return view('xiaotong');
    }
}
