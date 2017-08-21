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
}
