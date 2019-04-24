<?php

namespace App\Models\resume;

use Illuminate\Database\Eloquent\Model;

class ResUserModel extends Model
{
    protected $table = 'res_user';

    //判断用户是否存在，是返回true,否则返回false
    public static function checkExit($name)
    {
        $data = ResUserModel::where('name', $name)
            ->select('id')
            ->first();
        
        return $data ? true : false;
    }

    /* 判断用户密码是否正确 */
    public static function checkPasswd($name, $passwd)
    {
        $data = ResUserModel::where('name', $name)
            ->first();
        
        return md5(md5($passwd) . $data['salt']) == $data['passwd'] ? $data : false;
    }

    /* 分页获取用户数据 */
    public static function getData($page, $pagesize, $field='*')
    {
        $page = $page ? $page : 1;
        $pagesize = $pagesize ? $pagesize : 10;

        $skip = ($page - 1) * $pagesize;

        foreach ($field as &$value) {
            $value = 'u.' . $value;
        }
        $field[] = 'v.name as vip_name';

        $data = ResUserModel::from('res_user as u')
            ->leftJoin('res_vip as v', 'v.id', '=', 'u.vip_id')
            ->
            select($field)
            ->orderBy('u.id', 'desc')
            ->skip($skip)
            ->take($pagesize)
            ->get()
            ->toArray();

        $count = ResUserModel::count();
        return array('data' => $data, 'count' => $count);
        // var_dump($data);die;
    }

    /* 插入一条数据 */
    public static function insertOne($data)
    {
        $flight = new ResUserModel();

        foreach ($data as $key => $value) {
            $flight->$key = $value;
        }

        $flight->save();
    }

    /* 修改一条数据,根据主键 */
    public static function updateOne($data, $id)
    {
        $flight = ResUserModel::find($id);

        foreach ($data as $key => $value) {
            $flight->$key = $value;
        }

        $flight->save();
    }
}
