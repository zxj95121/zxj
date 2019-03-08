<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Wechat;

class PoemController extends Controller
{
	protected $headers = array(
        'Origin:https://admin.zxjxj.com/',
    );

    public function poem_single($id, Request $request)
    {
    	$prefix = getenv('ADMINURL');
        $url = $prefix . '/api/poem/poem_single';

        $poems = Wechat::curl($url, ['id' => $id], $this->headers);

        if ($poems['code'] == 1) {
        	return redirect()->route('home');
        }
    	return view('poem/poem_single', ['prefix' => $prefix, 'poem' => $poems['data']]);
    }

    /*ajax每次请求一定量的诗集*/
    public function poem_some($page, Request $request)
    {
        $prefix = getenv('ADMINURL');
        $url = $prefix . '/api/poem/allpoems';

        $poems = Wechat::curl($url, ['page' => $page, 'pagesize' => 20], $this->headers);

        echo json_encode($poems);
        die;
    }
}
