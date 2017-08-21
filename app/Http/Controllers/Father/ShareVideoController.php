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
		   $path = $request->file('file')->store('father');

        	echo $path;
		}
		dd(1);
    }
}
