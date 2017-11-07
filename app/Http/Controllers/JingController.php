<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\JingSearchNumber;
use Wechat;

class JingController extends Controller
{
    public function jing()
    {
    	return view('zxj.jing');
    }

    public function getNum(Request $request)
    {
    	$word = $request->input('word');
    	$left_num = $request->input('left_num');
    	$right_num = $request->input('right_num');
    	$download_num = $request->input('download_num');

    	$word = urlencode($word);

    	$url = 'http://ccl.pku.edu.cn:8080/ccl_corpus/pattern?q='.$word.'&start=0&num=2&index=FullIndex&outputFormat=HTML&encoding=UTF-8&scopestr=&search=%E6%9F%A5%E6%89%BE&inresult=&dir=xiandai&dir=xiandai&orderStyle=DocID&scopestr=&maxLeftLength='.$left_num.'&maxRightLength='.$right_num.'&neighborSortLength=0';

    	$data = Wechat::curls($url);

    	//nowrap="yes">共有 <b>30870</b> 
    	preg_match('/nowrap\=\"yes\".*\<b\>(\d+)\<\/b\>/', $data, $result);

    	return response()->json(['num' => $result[1]]);
    }


    public function getData(Request $request)
    {
    	$word = $request->input('word');
    	$left_num = $request->input('left_num');
    	$right_num = $request->input('right_num');
    	$download_num = (int)$request->input('download_num');
    	$num = (int)$request->input('num');

    	$skip = (int)($download_num/50);
    	

    	if ($request->input('txt')) {
    		//后续请求
    		$txt_last = $request->input('txt');
    		$txt = $_SERVER['DOCUMENT_ROOT'].'/images/jing/ccl'.$txt_last.'.txt';
    		$group = $request->input('group');

    	} else {
    		//第一次请求
    		// 从1到num，随机抽取download个数
	    	$arr = $this->knuth($num, $download_num);

	    	$group = JingSearchNumber::saveNumber($arr);
	    	// $group = 1;
	    	$txt_last = date('YmdHis', time());
    		$txt = $_SERVER['DOCUMENT_ROOT'].'/images/jing/ccl'.$txt_last.'.txt';
    	}
    	

    	/*如果传了n就表示n，没有n从1开始*/
    	$n = $request->input('n') ? $request->input('n') : 1;

    	$result = $this->getSome($group, $n, $word, $download_num, $left_num, $right_num, $txt);

    	return response()->json(['result' => $result, 'n' => ++$n, 'txt' => $txt_last, 'group'=>$group]);
    	
    }

    //downloadTxt
    public function downloadTxt($file, Request $request)
    {
    	$filename = $_SERVER['DOCUMENT_ROOT'].'/images/jing/ccl'.$file.'.txt'; //文件路径
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=".$file.'.txt');
		readfile($filename);
    }

    private function getSome($group, $n, $word, $download_num, $left_num, $right_num, $txt)
    {
    	$skip = (int)($download_num/50);
    	$number = JingSearchNumber::getNumber($group, $n, $skip);

    	if (!$number)
    		return false;
    	// return $number;

    	$count = count($number);
    	$num = $number['max'] - $number['min'] + 1;

    	$word = urlencode($word);

		$current = $number['min']-1;

		require_once($_SERVER['DOCUMENT_ROOT'].'/plugin/simple_html_dom/simple_html_dom.php');

		$len = 0;
    	$pre = 0;

    	$fp = fopen($txt, 'a+');
    	$k = ($n-1)*$skip+1;

		while ($current <= $number['max']) {
			$url = 'http://ccl.pku.edu.cn:8080/ccl_corpus/pattern?dir=xiandai&q='.$word.'&inresult=&start='.$current.'&num=1000&index=FullIndex&outputFormat=HTML&orderStyle=DocID&encoding=UTF-8&neighborSortLength=0&maxLeftLength='.$left_num.'&maxRightLength='.$right_num.'&isForReading=&scopestr=';

			$data = Wechat::curls($url);

			$html = str_get_html($data);

			foreach($html->find('table[align=center] tr') as $element) {
	    		//获取当前ID
	    		$ids = array();
	    		preg_match('/(\d+)\./', $element->children(0)->plaintext, $ids);

	    		$result[] = $ids[1];
	    		if (isset($number[$ids[1]]) && $number[$ids[1]] == $ids[1]) {
					$left = $element->children(1)->plaintext;
					$center = '['.$element->children(2)->plaintext.']';
					$right = $element->children(3)->plaintext;

					$str = $left.$center.$right."\r\n";

	    			if ($ids[1] == $pre) {
	    				//表示还是当前这个记录
	    				fwrite($fp, '  '.$str);
	    			} else {
	    				//表示是一条新纪录
	    				fwrite($fp, $k.':'.$str);
	    				$pre = $ids[1];
	    				$k++;
	    			}	
	    		}
			}

			$current += 1000;
		}
    	
		fclose($fp);
    	
    	return true;
    }

    private function knuth($n, $m)  
	{   
		$arr = [];
	    for($i = 1; $i <= $n && $m; $i++)  
	    {  
	        if( rand(1, $n)%($n-$i) < $m)  
	        {  
	            $arr[] = $i;
	            $m--;  
	        }
	    }
	    return $arr;  
	}
}
