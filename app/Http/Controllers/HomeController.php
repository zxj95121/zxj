<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wechat;

class HomeController extends Controller
{
    public function home()
    {   echo getenv('ADMINURL') . 'poem/managePoem';
        $poems = Wechat::curl(getenv('ADMINURL') . 'poem/managePoem');
        var_dump($poems);die;
    	return view('home');
    }

    public function resume()
    {
        return view('resume');
    }

    public function poem()
    {
        return view('poem');
    }
    
    public function shenghong()
    {
    	return view('shenghong');
    }

    public function introduce()
    {
    	return view('introduce');
    }

    public function dawanzi()
    {
        return view('dawanzi');
    }
}
