<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Resume\BasicController;

use App\Models\resume\ResVipModel;

use Session;

class VipController extends BasicController
{
    protected $userinfo;

    public function index()
    {

        $this->checkAdmin(); //检查是否有权限
        /* 取用户信息 */
        // $this->getUserInfo(session('resId'));


        return view('resume/vip/index');
    }

    /* ajax请求VIP数据列表 */
    public function _list(Request $request)
    {
        $this->checkAdmin(); //检查是否有权限

        $page = $request->input('page');
        $pagesize = $request->input('limit');

        $result = ResVipModel::getData($page, $pagesize, ['id', 'name', 'price', 'discount', 'status', 'created_at']);

        return $this->show_json(0, '請求成功', $result['data'], $result['count']);
    }

    /* 編輯VIP信息 */
    public function edit(Request $request)
    {
        $this->checkAdmin(); //检查是否有权限

        $id = $request->input('id'); //操作的用戶ID

        if ( $request->isMethod('post') ) {
            //要么是添加，要么是修改
            $data = $request->all();
            $data['status'] = $data['status'] == 'on' ? 1 : 0;
            unset($data['_token']);

            if (!$id) {
                //添加
                // 插入数据库
                ResVipModel::insertOne($data);
            } else {
                //修改
                $edit_id = $data['id'];
                unset($data['id']);
                ResVipModel::updateOne($data, $edit_id);
            }
            return redirect('resume/vip/index');
        } else {
            //要么是添加，要么是修改
            $assign = array();
            if ($id) {
                //修改
                $assign = ResVipModel::where('id', $id)
                    ->select('id', 'name', 'price', 'discount', 'status')
                    ->first()
                    ->toArray();
            } else {
                //添加
            }

            return view('resume/vip/edit', $assign);
        }
    }
}
