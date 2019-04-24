<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>用户列表</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/all/layui/css/layui.css" media="all">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>

<body>
    <div style="margin-bottom: 5px;">

        <!-- 示例-970 -->
        <!-- <ins class="adsbygoogle" style="display:inline-block;" data-ad-client="ca-pub-6111334333458862" data-ad-slot="3820120620"></ins> -->

    </div>

    <!-- <div class="layui-btn-group demoTable">
        <button class="layui-btn" data-type="getCheckData">获取选中行数据</button>
        <button class="layui-btn" data-type="getCheckLength">获取选中数目</button>
        <button class="layui-btn" data-type="isAll">验证是否全选</button>
    </div> -->

    <blockquote class="layui-elem-quote layui-text">
        <button class="layui-btn" onclick="location.href='/resume/user/edit';">添加新用户</button>
    </blockquote>

    <table class="layui-table" id="user_Table" lay-filter="demo">
        <thead>
            <tr>
            </tr>
        </thead>
    </table>

    <script type="text/html" id="barDemo">
        <!-- <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a> -->
        <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
        <!-- <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a> -->
    </script>




    <script src="/all/layui/layui.js" charset="utf-8"></script>

    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>
        layui.use('table', function() {
            var table = layui.table;
            //监听表格复选框选择
            table.on('checkbox(demo)', function(obj) {
                console.log(obj)
            });

            table.render({
                elem: '#user_Table',
                cols: [
                    [{
                        checkbox: true,
                        fixed: 'left'
                    }, {
                        title: 'ID',
                        field: 'id',
                        sort: true,
                        fixed: true
                    }, {
                        title: '用户名',
                        field: 'name'
                    }, {
                        title: 'VIP',
                        field: 'vip_name',
                        sort: true,
                        templet: function(d) {
                            return d.vip_name ? d.vip_name : '普通用户';
                        }
                    }, {
                        title: '身份',
                        field: 'identity',
                        templet: function(d) {
                            return d.identity == 0 ? '用户' : '管理员';
                        }
                    }, {
                        title: '用户状态',
                        field: 'status',
                        templet: function(d) {
                            return d.status == 1 ? '正常' : '禁用';
                        }
                    }, {
                        title: '创建时间',
                        field: 'created_at',
                        sort: true
                    }, {
                        fixed: 'right',
                        width: 178,
                        align: 'center',
                        toolbar: '#barDemo'
                    }]
                ],
                // "{url:'/resume/user/list', page:true, id:'usertable', method:'post', where: {_token: '{{csrf_token()}}'}}"
                url: '/resume/user/list',
                page: true,
                id: 'usertable',
                method: 'post',
                where: {
                    _token: '{{csrf_token()}}'
                }
            });


            //监听工具条
            table.on('tool(demo)', function(obj) {
                var data = obj.data;
                if (obj.event === 'detail') {
                    layer.msg('ID：' + data.id + ' 的查看操作');
                } else if (obj.event === 'del') {
                    layer.confirm('真的删除行么', function(index) {
                        obj.del();
                        layer.close(index);
                    });
                } else if (obj.event === 'edit') {
                    window.location.href = '/resume/user/edit?id=' + data.id;
                    // layer.alert('编辑行：<br>' + JSON.stringify(data))
                }
            });

            // var $ = layui.$,
            //     active = {
            //         getCheckData: function() { //获取选中数据
            //             var checkStatus = table.checkStatus('usertable'),
            //                 data = checkStatus.data;
            //             layer.alert(JSON.stringify(data));
            //         },
            //         getCheckLength: function() { //获取选中数目
            //             var checkStatus = table.checkStatus('usertable'),
            //                 data = checkStatus.data;
            //             layer.msg('选中了：' + data.length + ' 个');
            //         },
            //         isAll: function() { //验证是否全选
            //             var checkStatus = table.checkStatus('usertable');
            //             layer.msg(checkStatus.isAll ? '全选' : '未全选')
            //         }
            //     };

            // $('.demoTable .layui-btn').on('click', function() {
            //     var type = $(this).data('type');
            //     active[type] ? active[type].call(this) : '';
            // });
        });
    </script>

</body>

</html> 