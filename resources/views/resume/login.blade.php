<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>汇秀登录</title>
    <style>
        #win10-login {
            background: url('/all/win10-ui/img/wallpapers/login.jpg') no-repeat fixed;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            position: fixed;
            z-index: -1;
            top: 0;
            left: 0;
        }

        #win10-login-box {
            width: 300px;
            overflow: hidden;
            margin: 0 auto;
        }

        .win10-login-box-square {
            width: 105px;
            margin: 0 auto;
            border-radius: 50%;
            background-color: darkgray;
            position: relative;
            overflow: hidden;
        }

        .win10-login-box-square::after {
            content: "";
            display: block;
            padding-bottom: 100%;
        }

        .win10-login-box-square .content {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        input {
            width: 90%;
            display: block;
            border: 0;
            margin: 0 auto;
            line-height: 36px;
            font-size: 20px;
            padding: 0 1em;
            border-radius: 5px;
            margin-bottom: 11px;
        }

        .login-username, .login-password {
            width: 91%;
            font-size: 13px;
            color: #999;
        }

        .login-password {
            width: calc(91% - 54px);
            -webkit-border-radius: 2px 0 0 2px;
            -moz-border-radius: 2px 0 0 2px;
            border-radius: 5px 0 0 5px;
            margin: 0px;
            float: left;
        }

        .login-submit {
            margin: 0px;
            float: left;
            -webkit-border-radius: 0 5px 5px 0;
            -moz-border-radius: 0 5px 5px 0;
            border-radius: 0 5px 5px 0;
            background-color: #009688;
            width: 54px;
            display: inline-block;
            height: 36px;
            line-height: 36px;
            padding: 0 auto;
            color: #fff;
            white-space: nowrap;
            text-align: center;
            font-size: 14px;
            border: none;
            cursor: pointer;
            opacity: .9;
            filter: alpha(opacity=90);

        }
        #error{
            color: #f73030;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div id="win10-login">
        <div style="height: 10%;min-height: 120px"></div>
        <div id="win10-login-box">
            <div class="win10-login-box-square">
                <img src="/all/win10-ui/img/avatar.jpg" class="content"/>
            </div>
            <p style="font-size: 24px;color: white;text-align: center">汇秀登录</p>
            <form id="signupForm" method="post" action="">
                <!--用户名-->

                <input id="name" type="text" name="name" placeholder="请输入用户名" class="login-username">
 
                <!--密码-->

                <input id="passwd" type="password" name="passwd" placeholder="请输入密码" class="login-password">

                <!-- CSRF -->

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
                <!--登陆按钮-->
                <input type="submit"  value="登录" id="btn-login" class="login-submit"/>
            </form>

            <div id="error">{{$msg}}</div>
        </div>
    </div>

    <script src="/all/win10-ui/js/jquery-2.2.4.min.js"></script>
    <script src="/all/win10-ui/validate/jquery.validate.min.js"></script>
    <script src="/all/win10-ui/validate/localization/messages_zh.min.js"></script>
    <script>
        $.validator.setDefaults({
            submitHandler: function() {
                $('#signupForm')[0].onsubmit();
            }
        });
        $(function(){
             $("#signupForm").validate({
                rules: {
                    name: "required",
                    passwd: {
                        required: true,
                        minlength: 6
                    },
                },
                messages: {
                    name: "请输入您的用户名",
                    passwd: {
                        required: "请输入密码",
                        minlength: "密码最少6位字符"
                    }
                },
                errorPlacement: function(error, element) {
                    console.log(error);
                    element.parents('form').next().html('')
                    error.appendTo(element.parents('form').next());  
                }
            });
        })
    </script>
</body>
</html>