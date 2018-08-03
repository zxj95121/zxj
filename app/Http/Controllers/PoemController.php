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

    	return view('poem/poem_single', ['prefix' => $prefix, 'poem' => $poems['data']]);
    }
}
