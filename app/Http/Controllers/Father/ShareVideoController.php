<?php

namespace App\Http\Controllers\Father;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShareVideoController extends Controller
{
    public function show()
    {
    	return view('father.shareVideo');
    }

    public function upload()
    {
    	return view('father.uploadVideo');
    }

    public function fileupload(Request $request)
    {
    	if ($request->hasFile('file')) {
		   $file = $request->file('file');
		   $name = date('YmdHis').rand(100,999);
		   $suffix = $file->getClientOriginalExtension();
		   echo $suffix;
		   dd(2);
		   $file->move('/var/www/html/home/public/father/'.$name.'.'.$suffix);
		   $url = 'http://www.zhangxianjian.com/father/'.$name.'.'.$suffix;
		   echo $url;
		}
		dd(1);
    }
}
