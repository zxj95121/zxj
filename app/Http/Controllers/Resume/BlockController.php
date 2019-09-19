<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Resume\BasicController;

use App\Models\resume\ResUserModel;
use App\Models\resume\ResVipModel;
use App\Models\resume\ResBlockModel;

use Session;

class BlockController extends BasicController
{
    protected $userinfo;

    public function index()
    {

        $this->checkAdmin(); //检查是否有权限
        /* 取用户信息 */
        // $this->getUserInfo(session('resId'));


        return view('resume/block/index');
    }

    /* ajax请求用户数据列表 */
    public function _list(Request $request)
    {
        $this->checkAdmin(); //检查是否有权限

        $page = $request->input('page');
        $pagesize = $request->input('limit');

        $result = ResBlockModel::getData($page, $pagesize, ['id', 'name', 'image', 'icon', 'kind', 'status', 'created_at']);

        return $this->show_json(0, '請求成功', $result['data'], $result['count']);
    }

    /* 編輯用戶信息 */
    public function edit(Request $request)
    {
        $this->checkAdmin(); //检查是否有权限

        $id = $request->input('id'); //操作的用戶ID

        // $this->getUserInfo(session('resId'));

        if ($request->isMethod('post')) {
            //要么是添加，要么是修改
            $data = $request->all();
            $data['status'] = $data['status'] == 'on' ? 1 : 0;
            unset($data['_token']);

            if (!$id) {
                //添加
                // 插入数据库
                $data['salt'] = str_random(6);
                $data['passwd'] = md5(md5($data['passwd']) . $data['salt']);
                ResUserModel::insertOne($data);
            } else {
                //修改
                $edit_id = $data['id'];
                unset($data['id']);

                /* 密码处理 */
                if (isset($data['passwd'])) {
                    $salt = ResUserModel::where('id', $edit_id)->value('salt');
                    $data['passwd'] = md5(md5($data['passwd']) . $salt);
                } else {
                    unset($data['passwd']);
                }
                ResUserModel::updateOne($data, $edit_id);
            }
            return redirect('resume/user/index');
        } else {
            $assign = array();
            //要么是添加，要么是修改
            $assign['vip'] = ResVipModel::where('status', 1)
                ->select('id', 'name', 'price')
                ->get();

            if ($id) {
                $assign['userinfo'] = ResUserModel::find($id);;
                //修改
            } else {
                //添加
            }

            return view('resume/block/edit', $assign);
        }
    }
}
