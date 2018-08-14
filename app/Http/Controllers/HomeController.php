<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wechat;
use View;

class HomeController extends Controller
{
    protected $headers = array(
        'Origin:https://admin.zxjxj.com/',
    );

    public function home()
    {   
        for ($i = 1;$i<=56;$i++) {
            $urls[] = 'https://www.zhangxianjain.com/poem/poem_single/' . $i;
        }
        // $urls = array(
        //     'http://www.example.com/1.html',
        //     'http://www.example.com/2.html',
        // );
        $api = 'http://data.zz.baidu.com/urls?site=https://www.zhangxianjian.com&token=USdg4zkCAsLBJqs8';
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        echo $result;
        die;


        $prefix = getenv('ADMINURL');
        $url = $prefix . '/api/poem/managePoem';

        $poems = Wechat::curl($url, null, $this->headers);

    	return view('home', ['poems' => $poems['data'], 'prefix' => $prefix]);
    }

    public function resume()
    {
        return view('resume');
    }

    public function poem(Request $request)
    {
        $prefix = getenv('ADMINURL');
        $url = $prefix . '/api/poem/allpoems';

        $poems = Wechat::curl($url, null, $this->headers);
        // var_dump($poems);
        return view('poem', ['poems' => $poems['data'], 'prefix' => $prefix]);
    }
    
    public function shenghong()
    {
    	return view('shenghong');
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
