<?php
namespace App\Http\Libraries;

use Illuminate\Support\ServiceProvider;
use Session;

class Wechat extends ServiceProvider
{
	/**
	* @author 张贤健
	* @function curl请求微信接口等
	* @program $url,$data=null
	*/
	public static function curl($url, $data = null)
	{
		// ------------------------------------------------------------------------
        //curl发送接口请求信息
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return json_decode($output,true);
    }


	// ------------------------------------------------------------------------



    /**
    * @author 张贤健
    * @function curl请求非json等
    * @program $url,$data=null
    */
    public static function curls($url, $data = null)
    {
        // ------------------------------------------------------------------------
        //curl发送接口请求信息
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
                curl_setopt($curl, CURLOPT_POST, 1);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }


    // ------------------------------------------------------------------------

    /**
    * @author 张贤健
    * @function deal_sqlResult将$data变成数组，处理字符串日期成合适的显示文字
    * @program 查出来的结果
    */
    public static function deal_sqlResult($data, $time=false, $column='created_at')
    {
        $result = array();
        foreach ($data as $key => $value) {
            foreach ($value as $k => $v) {
                $result[$key][$k] = $v;
            }
            if ($time) {
                $created_at = strtotime($result[$key][$column]);//聊天内容的日期

                $space = time() - $created_at;
                $time_space = '';
                if ($space < 180) {
                    $time_space = '<3分钟';
                } else if ($space < 3600) {
                    $time_space = '<1小时';
                } else if ($space < 3600*24) {
                    $time_space = '<1天';
                } else if ($space < 3600*24*365) {
                    $time_space = '<1年';
                } else {
                    $time_space = '>1年';
                }
                $result[$key]['time_space'] = $time_space;
            }
        }
        return $result;
    }
}

?>