<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class JingSearchNumber extends Model
{
    protected $table = 'jing_search_number';


    public static function saveNumber($arr)
    {
    	//先从数组库查出组数
    	$count = JingSearchNumber::where('status', 1)
    		->count();
    	$count++;
    	$date = date('Y-m-d H:i:s', time());

    	foreach ($arr as $value) {
    		$inserts[] = array(
    			'number' => $value,
    			'group' => $count,
    			'created_at' => $date,
    			'updated_at' => $date
    		);
    	}

    	DB::table('jing_search_number')->insert($inserts);

    	return $count;
    }

    public static function getNumber($group, $n)
    {
    	$num = ($n-1)*20;
    	$number = JingSearchNumber::where('status', '1')
    		->where('group', $group)
    		->offset($num)
    		->limit(20)
    		->select('number')
    		->get()
    		->toArray();

    	if (count($number) == 0) {
    		return false;
    	}

    	foreach($number as $value) {
    		$result[$value['number']] = $value['number'];
    	}

    	$result['min'] = $number[0]['number'];
    	$result['max'] = $number[count($number)-1]['number'];

    	return $result;
    }
}
