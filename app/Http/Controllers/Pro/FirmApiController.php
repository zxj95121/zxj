<?php

namespace App\Http\Controllers\Pro;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\FirmApiSave;

class FirmApiController extends Controller
{
    public function requestSave(Request $request)
    {
    	$name = $request->input('name');//请求类型名称
    	$request = $request->input('request');//请求的数据
    	$result = $request->input('result');//返回的结果

    	if (!$result || !$name) {
    		exit;
    	}

    	$flight = new FirmApiSave();
    	$flight->name = $name;
    	$flight->request = $request;
    	$flight->result = $result;
    	$flight->save();
    }
}
