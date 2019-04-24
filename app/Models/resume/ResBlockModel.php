<?php

namespace App\Models\resume;

use Illuminate\Database\Eloquent\Model;

class ResBlockModel extends Model
{
    protected $table = 'res_block';

    /* 分页获取简历类型数据 */
    public static function getData($page, $pagesize, $field = '*')
    {
        $page = $page ? $page : 1;
        $pagesize = $pagesize ? $pagesize : 10;

        $skip = ($page - 1) * $pagesize;

        $data = ResBlockModel::select($field)->orderBy('id', 'desc')->skip($skip)->take($pagesize)->get()->toArray();

        $count = ResBlockModel::count();
        return array('data' => $data, 'count' => $count);
        // var_dump($data);die;
    }

    /* 插入一条数据 */
    public static function insertOne($data)
    {
        $flight = new ResBlockModel();

        foreach ($data as $key => $value) {
            $flight->$key = $value;
        }

        $flight->save();
    }

    /* 修改一条数据,根据主键 */
    public static function updateOne($data, $id)
    {
        $flight = ResBlockModel::find($id);

        foreach ($data as $key => $value) {
            $flight->$key = $value;
        }

        $flight->save();
    }
}
