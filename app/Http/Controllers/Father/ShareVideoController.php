<?php

namespace App\Http\Controllers\Father;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

use App\Models\ShareVideo;

class ShareVideoController extends Controller
{
    public function index(Request $request)
    {
        return view('father.index');
    }

    public function show(Request $request)
    {
    	$id = $request->input('id');
    	$obj = ShareVideo::find($id);
    	return view('father.shareVideo', ['obj'=>$obj]);
    }

    public function upload()
    {
    	return view('father.uploadVideo');
    }


    public function ajaxVideo(Request $request)
    {
    	if ($request->hasFile('file')) {
		   $file = $request->file('file');
		   $desc = $request->input('desc');
		   $name = date('YmdHis').rand(100,999);
		   $suffix = $file->getClientOriginalExtension();
           // return response()->json($_SERVER);

		   // $request->file('file')->move($_SERVER['DOCUMENT_ROOT'].'/father/videos/'. $name.'.'.$suffix);
           $path = Storage::putFile('public/photos', $request->file('file'));
		   $url = $_SERVER['HTTP_ORIGIN'].'/storage/photos/'.basename($path);

		   $flight = new ShareVideo();
		   $flight->desc = $desc;
		   $flight->url = $url;
           $flight->suffix = $suffix;
		   $flight->status = 1;
		   $flight->save();
		   $id = $flight->id;

           return response()->json(['errcode' => 0, 'id'=> $id]);
		   // return redirect('/father/shareVideo?id='.$id);
		}
    }
}
