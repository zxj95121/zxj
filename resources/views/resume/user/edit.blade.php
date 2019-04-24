<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>编辑页</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/all/layui/css/layui.css" media="all">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>

<body>

    <blockquote class="layui-elem-quote layui-text">
        <button class="layui-btn layui-btn-sm" onclick="history.back();"><i class="layui-icon">&#xe603;</i>返回上一级</button>
        返回用户列表页
    </blockquote>

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>编辑用户信息</legend>
    </fieldset>

    <form class="layui-form" action="" method="post" autocomplete="off">

        <label style="display:none;"><span></span><input type="text"></label>
        <label style="display:none;"><span></span><input type="password"></label>

        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>
            <div class="layui-input-block">
                <input type="text" name="name" value="@if(isset($userinfo)) {{$userinfo['name']}} @else @endif" lay-verify="name" autocomplete="off" placeholder="请输入用户名" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">VIP</label>
            <div class="layui-input-block">
                <select name="vip_id">
                    <option value="0">普通用户</option>
                    @foreach ($vip as $value)
                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">用户身份</label>
            <div class="layui-input-block">
                <select name="identity">
                    <option value="0" @if (isset($userinfo) && $userinfo['identity']==0) selected="selected" @else @endif>用户</option>
                    <option value="1" @if (isset($userinfo) && $userinfo['identity']==1) selected="selected" @else @endif>管理员</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item" pane="">
            <label class="layui-form-label">是否可用</label>
            <div class="layui-input-block">
                <input type="checkbox" @if (isset($userinfo) && $userinfo['status']==1) checked="checked" @elseif (isset($userinfo) && $userinfo['status']==0) @else checked="checked" @endif name="status" lay-skin="switch" lay-text="可用|禁用" lay-filter="switchTest" title="开关">
            </div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-block">
                @if (isset($userinfo))
                <input type="password" lay-verify="passwd" name="passwd" placeholder="不修改不填" value="" autocomplete="off" class="layui-input">
                @else
                <input type="password" lay-verify="passwd" name="passwd" placeholder="请输入密码" required value="" autocomplete="off" class="layui-input">
                @endif
            </div>
        </div>
        {{csrf_field()}}

        <div class="layui-form-item">
            <button class="layui-btn" lay-submit="" lay-filter="demo2" style="margin-left: 16px;">提交</button>
        </div>
    </form>

    <script src="/all/layui/layui.js" charset="utf-8"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>
        layui.use(['form'], function() {
            var form = layui.form,
                layer = layui.layer;

            //自定义验证规则
            form.verify({
                name: function(value) {
                    if (value.length < 5) {
                        return '用戶名至少得5个字符啊';
                    }
                },
                passwd: [
                    /^$|^[\S]{6,12}$/, '密码必须6到12位，且不能出现空格'
                ]
            });

            //监听指定开关
            form.on('switch(switchTest)', function(data) {
                if (!this.checked) {
                    layer.tips('温馨提示：用户将会被禁用!', data.othis)
                    // layer.msg('用户将会被禁用!');
                }
            });

            //监听提交
            form.on('submit(demo1)', function(data) {
                layer.alert(JSON.stringify(data.field), {
                    title: '最终的提交信息'
                })
                return false;
            });

            //表单初始赋值
            form.val('example', {
                "name": "wells",
                "interest": 1,
                "like[write]": true //复选框选中状态
                    ,
                "close": true //开关状态
                    ,
                "sex": "女",
                "desc": "我爱 layui"
            })


        });
    </script>

</body>

</html> 