@extends('algorithm.layout')
@section('title', '算法测试-PHP用户登录')
@section('style')
    <meta name="csrf_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/all/algorithm/assets/slider.css">
    <style>
        .slider{
            margin-bottom: 18px;
        }
        #regisSection{
            display: none;
        }

    </style>
@endsection
@section('list')
    <div class="row userinfoRow" onclick=window.location.href='{{$userinfo["href"]}}';>
        <img src="{{$userinfo['headimgurl']}}" id="headimg">
        <h5 id="nickname">{{$userinfo['account']}}</h5>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-box">
            <div id="deal0" style="display: none;" class="panel panel-primary questionPanel">
                <div class="panel-heading">
                    <h3 class="panel-title">登陆即可在线答题</h3>
                </div>
                <div class="panel-body">
                    <div class="form-top">
                        <div class="form-top-left">
                            <p>请输入你的用户名和密码:</p>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">用户名</label>
                                <input type="text" name="form-username" placeholder="用户名..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">密码</label>
                                <input type="password" name="form-password" placeholder="密码..." class="form-password form-control" id="form-password">
                            </div>
                            <button type="button" class="btn btn-success">立 即 登 陆</button>
                            <a href="javascript:void(0);" onclick="divRedirect(0);" style="position: absolute;right: 26px;bottom: 14px;">没有账户？点我注册</a>
                        </form>

                    </div>
                </div>
            </div>

            <div id="deal1" class="panel panel-primary questionPanel">
                <div class="panel-heading">
                    <h3 class="panel-title">注册即可在线答题</h3>
                </div>
                <div class="panel-body">
                    <div class="form-top">
                        <div class="form-top-left">
                            <p>请提供相关信息进行注册:</p>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">邮箱</label>
                                <input type="text" name="form-username" placeholder="请输入邮箱账号..." class="form-username form-control" id="r-form-username">
                            </div>
                            <div class="form-group">
                                <div id="slider2" class="slider form-group"></div>

                            </div>
                            <section id="regisSection">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">验证码</label>
                                    <input type="text" name="form-username" placeholder="请输入邮箱收到的验证码..." class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">密码</label>
                                    <input type="text" name="form-password" placeholder="密码..." class="form-password form-control" id="form-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password2">密码</label>
                                    <input type="text" name="form-password2" placeholder="再次输入密码..." class="form-password form-control" id="form-password2">
                                </div>
                                <div class="form-group" style="z-index:666;opacity: 0;">
                                    <label for="form-headimg" class="sr-only">头像</label>
                                    <input class="form-control" name="form-headimg" id="form-headimg" type="file" placeholder="选择头像图片"/>
                                </div>
                                <div class="form-group" style="margin-top: -49px;z-index:3;">
                                    <label for="form-headimg" class="sr-only">头像2</label>
                                    <div class="form-control" style="color: #999999;">请选择头像...</div>
                                </div>
                            </section>
                            <button type="button" class="btn btn-success">立 即 注 册</button>
                            <a href="javascript:void(0);" onclick="divRedirect(1);" style="position: absolute;right: 26px;bottom: 14px;">已有账户？点我登陆</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/all/algorithm/assets/jquery.slider.min.js"></script>
    <script>
        $(function(){
            $("#slider2").slider({
                width: 340, // width
                height: 40, // height
                sliderBg:"rgb(134, 134, 131)",// 滑块背景颜色
                color:"#fff",// 文字颜色
                fontSize: 14, // 文字大小
                bgColor: "#33CC00", // 背景颜色
                textMsg: "按住滑块，拖拽验证", // 提示文字
                successMsg: "验证通过", // 验证成功提示文字
                successColor: "#FFF", // 滑块验证成功提示文字颜色
                time: 400, // 返回时间
                callback: function(result) { // 回调函数，true(成功),false(失败)
                    if (result) {
                        $('#regisSection').show();
                    }
                }
            });
            //$("#slider2").slider("restore");

        })

        function divRedirect(type){
            type = parseInt(type);
            $('#deal'+type).hide();
            $('#deal'+((type+1)%2)).show();
        }
    </script>
@endsection