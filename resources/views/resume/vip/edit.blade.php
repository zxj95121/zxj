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
        返回VIP列表页
    </blockquote>

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        @if(isset($id))
        <legend>修改VIP等級</legend>
        @else
        <legend>添加VIP等級</legend>
        @endif
    </fieldset>

    <form class="layui-form" action="" method="post" lay-filter="default">
        @isset($id)
        <input name="id" value="{{$id}}" type="hidden" />
        @endisset
        <div class="layui-form-item">
            <label class="layui-form-label">VIP名称</label>
            <div class="layui-input-block">
                <input type="text" name="name" lay-verify="name" autocomplete="off" placeholder="请输入名称" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">VIP价格</label>
            <div class="layui-input-block">
                <input type="text" name="price" lay-verify="price" autocomplete="off" placeholder="请输入购买价格" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">享受折扣</label>
            <div class="layui-input-block">
                <input type="number" max="100" min="1" name="discount" lay-verify="discount" autocomplete="off" placeholder="请输入享受折扣" class="layui-input">
            </div>
        </div>

        {{csrf_field()}}
        <div class="layui-form-item" pane="">
            <label class="layui-form-label">是否可用</label>
            <div class="layui-input-block">
                <input type="checkbox" checked="" name="status" lay-skin="switch" lay-text="可用|禁用" lay-filter="switchTest" title="开关">
            </div>
        </div>

        <div class="layui-form-item" style="margin-left: 15px;">
            <button class="layui-btn" lay-submit="" lay-filter="demo2">提交</button>
        </div>
    </form>

    <script src="/all/layui/layui.js" charset="utf-8"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>
        layui.use(['form', 'layer'], function() {
            var form = layui.form,
                layer = layui.layer;

            //自定义验证规则
            form.verify({
                name: function(value) {
                    if (!value) {
                        return 'VIP名称不能为空';
                    }
                },
                price: [
                    /^\d+(\.\d+)?$/, '价格输入有误'
                ],
                discount: function(value) {
                    if (value < 1 || value > 100) {
                        return 'VIP折扣输入不正确';
                    }
                }
            });

            //监听指定开关
            form.on('switch(switchTest)', function(data) {
                if (!this.checked) {
                    layer.tips('温馨提示：VIP等级将会被禁用!', data.othis)
                }
            });

            //监听提交
            form.on('submit(demo2)', function(data) {
                // layer.alert(JSON.stringify(data.field), {
                //     title: '最终的提交信息'
                // })
                return true;
            });

            //表单初始赋值
            @isset($id)
            form.val('default', {
                "name": "{{$name}}",
                "price": "{{$price}}",
                "discount": "{{$discount}}", //复选框选中状态,
                @if($status == 1)
                "status": 'on',
                @else "status": 'off',
                @endif
            })
            @endisset


        });
    </script>

</body>

</html> 