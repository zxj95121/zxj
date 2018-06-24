<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoemController extends Controller
{
    public function poem_single($id, Request $request)
    {
    	return view('poem/poem_single', ['poem_id' => $id]);
    }
}
