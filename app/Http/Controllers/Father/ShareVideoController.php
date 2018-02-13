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
		$desc = $request->input('desc');
        if (!$request->hasFile('file1')) {
            return response()->json(['errcode' => 1, 'reason' => '发送的文件不合要求']);
        }
        for ($i = 0;$i < 2;$i++) {
            if ($request->hasFile('file'.$i)) {
                $file = $request->file('file'.$i);
                $name = date('YmdHis').rand(100,999);
                $suffix = $file->getClientOriginalExtension();

                if (in_array(array('jpeg', 'jpg', 'gif', 'png'), $suffix)) {
                    $path = Storage::putFile('public/photos', $request->file('file'));
                    $img_url = '/storage/photos/'.basename($path);
                    break;
                }

    		   // $request->file('file')->move($_SERVER['DOCUMENT_ROOT'].'/father/videos/'. $name.'.'.$suffix);
               $path = Storage::putFile('public/photos', $request->file('file'));
    		   $url = $_SERVER['HTTP_ORIGIN'].'/storage/photos/'.basename($path);
            }
        }

	   $flight = new ShareVideo();
	   $flight->desc = $desc;
	   $flight->url = $url;
       $flight->suffix = $suffix;
       $flight->img_url = $img_url;
	   $flight->status = 1;
	   $flight->save();
	   $id = $flight->id;

       return response()->json(['errcode' => 0, 'id'=> $id]);
	   // return redirect('/father/shareVideo?id='.$id);
    }

    /*视频列表页*/
    public function videoList(Request $request)
    {
        $videos = ShareVideo::where('status', 1)
            ->get();
        return view('father.list', ['videos' => $videos]);
    }
}
