<?php

namespace App\Models\resume;

use Illuminate\Database\Eloquent\Model;

class ResVipModel extends Model
{
    protected $table = 'res_vip';

    /* 分页获取VIP等级数据 */
    public static function getData($page, $pagesize, $field = '*')
    {
        $page = $page ? $page : 1;
        $pagesize = $pagesize ? $pagesize : 10;

        $skip = ($page - 1) * $pagesize;

        $data = ResVipModel::select($field)->orderBy('id', 'desc')->skip($skip)->take($pagesize)->get()->toArray();

        $count = ResVipModel::count();
        return array('data' => $data, 'count' => $count);
        // var_dump($data);die;
    }

    /* 插入一条数据 */
    public static function insertOne($data)
    {
        $flight = new ResVipModel();

        foreach ($data as $key => $value) {
            $flight->$key = $value;
        }

        $flight->save();
    }

    /* 修改一条数据,根据主键 */
    public static function updateOne($data, $id)
    {
        $flight = ResVipModel::find($id);

        foreach ($data as $key => $value) {
            $flight->$key = $value;
        }

        $flight->save();
    }
}
