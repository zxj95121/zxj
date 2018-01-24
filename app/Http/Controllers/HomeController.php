<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('home');
    }

    public function resume()
    {
    	return view('resume');
    }

    public function introduce()
    {
    	return view('introduce');
    }

    public function dawanzi()
    {
        return view('dawanzi');
    }
}
