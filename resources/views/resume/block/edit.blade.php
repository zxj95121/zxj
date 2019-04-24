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
        返回类型列表页
    </blockquote>

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>编辑类型信息</legend>
    </fieldset>

    <form class="layui-form" action="" method="post" autocomplete="off">

        <label style="display:none;"><span></span><input type="text"></label>
        <label style="display:none;"><span></span><input type="password"></label>

        <div class="layui-form-item">
            <label class="layui-form-label">类型名称</label>
            <div class="layui-input-block">
                <input type="text" name="name" lay-verify="name" autocomplete="off" placeholder="请输入类型名称" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">类型示意图</label>
            <div class="layui-input-block">
                <input type="file" name="image" style="display: none;">
                <button type="button" class="layui-btn" id="upload">
                    <i class="layui-icon">&#xe67c;</i>选择图片
                </button>
                <button type="button" class="layui-btn layui-btn-primary" id="uploadBtn">开始上传</button>
            </div>
        </div>

        <div class="layui-form-item" id="imageShow" style="display: none;">
            <label class="layui-form-label"></label>
            <div class="layui-input-block">
                <img src="" alt="">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">类型图标</label>
            <div class="layui-input-block">
                <input type="text" name="icon" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">内容序号</label>
            <div class="layui-input-block">
                <input type="text" name="kind" class="layui-input">
            </div>
        </div>

        <div class="layui-form-item" pane="">
            <label class="layui-form-label">是否可用</label>
            <div class="layui-input-block">
                <input type="checkbox" @if (isset($userinfo) && $userinfo['status']==1) checked="checked" @elseif (isset($userinfo) && $userinfo['status']==0) @else checked="checked" @endif name="status" lay-skin="switch" lay-text="可用|禁用" lay-filter="switchTest" title="开关">
            </div>
        </div>


        {{csrf_field()}}

        <div class="layui-form-item">
            <button class="layui-btn" lay-submit="" lay-filter="demo2" style="margin-left: 16px;">提交</button>
        </div>
    </form>

    <script src="/all/layui/layui.js" charset="utf-8"></script>
    <script src="/all/win10-ui/js/jquery-2.2.4.min.js"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>
        layui.use(['form', 'upload'], function() {
            var form = layui.form,
                layer = layui.layer;

            var upload = layui.upload; //得到 upload 对象

            //创建一个上传组件
            upload.render({
                elem: '#upload',
                url: '/resume/block/upload',
                done: function(res, index, upload) { //上传后的回调

                },
                choose: function(obj) {
                    layer.msg('选择文件');
                    //将每次选择的文件追加到文件队列
                    var files = obj.pushFile();

                    //预读本地文件，如果是多文件，则会遍历。(不支持ie8/9)
                    obj.preview(function(index, file, result) {
                        console.log(index); //得到文件索引
                        console.log(file); //得到文件对象
                        console.log(result); //得到文件base64编码，比如图片

                        $('#imageShow').show().find('img').attr('src', result);
                        $('#uploadBtn').removeClass('layui-btn-primary');

                        //obj.resetFile(index, file, '123.jpg'); //重命名文件名，layui 2.3.0 开始新增

                        //这里还可以做一些 append 文件列表 DOM 的操作

                        //obj.upload(index, file); //对上传失败的单个文件重新上传，一般在某个事件中使用
                        //delete files[index]; //删除列表中对应的文件，一般在某个事件中使用
                    });
                },
                bindAction: '#uploadBtn',
                auto: false,
                accept: 'images' //允许上传的文件类型
                //,size: 50 //最大允许上传的文件大小
                //,……
            })

            //自定义验证规则
            form.verify({
                name: function(value) {
                    if (value.length < 2) {
                        return '用戶名至少得2个字符啊';
                    }
                }
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