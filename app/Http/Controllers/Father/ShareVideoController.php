<?php

namespace App\Http\Controllers\Father;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\ShareVideo;

class ShareVideoController extends Controller
{
    public function show(Request $request)
    {
    	// $id = $request->input('id');
    	$id = 1;
    	$obj = ShareVideo::find($id);
    	return view('father.shareVideo', ['obj'=>$obj]);
    }

    public function upload()
    {
    	return view('father.uploadVideo');
    }

    public function fileupload(Request $request)
    {
    	if ($request->hasFile('file')) {
		   $file = $request->file('file');
		   $desc = $request->input('description');
		   $name = date('YmdHis').rand(100,999);
		   $suffix = $file->getClientOriginalExtension();
		   $request->file('file')->move('/var/www/html/home/public/father', $name.'.'.$suffix);
		   $url = 'http://www.zhangxianjian.com/father/'.$name.'.'.$suffix;

		   $flight = new ShareVideo();
		   $flight->desc = $desc;
		   $flight->url = $url;
		   $flight->status = 1;
		   $flight->save();
		   $id = $flight->id;
		   return redirect('/father/shareVideo?id='.$id);
		}
    }
}
