<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>汇秀-让您的简历秀气来</title>
    <link rel='Shortcut Icon' type='image/x-icon' href='/all/win10-ui/img/windows.ico'>
    <script type="text/javascript" src="/all/win10-ui/js/jquery-2.2.4.min.js"></script>
    <link href="/all/win10-ui/css/animate.css" rel="stylesheet">
    <script type="text/javascript" src="/all/win10-ui/component/layer-v3.0.3/layer/layer.js"></script>
    <link rel="stylesheet" href="/all/win10-ui/component/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="/all/win10-ui/css/default.css" rel="stylesheet">
    <script type="text/javascript" src="/all/win10-ui/js/win10.js"></script>
    <style>
        * {
            font-family: "Microsoft YaHei", 微软雅黑, "MicrosoftJhengHei", 华文细黑, STHeiti, MingLiu
        }

        /*磁贴自定义样式*/
        .win10-block-content-text {
            line-height: 44px;
            text-align: center;
            font-size: 16px;
        }
    </style>
    <script>
        Win10.onReady(function() {

            //设置壁纸
            Win10.setBgUrl({
                main: '/all/win10-ui/img/wallpapers/main.jpg',
                mobile: '/all/win10-ui/img/wallpapers/mobile.jpg',
            });

            Win10.setAnimated([
                'animated flip',
                'animated bounceIn',
            ], 0.01);
        });
    </script>
</head>

<body>
    <div id="win10">
        <div class="desktop">
            <div id="win10-shortcuts" class="shortcuts-hidden">
                <!-- 用户管理 -->
                <div class="shortcut" onclick="Win10.openUrl('/resume/user/index', '<img class=icon src=/all/win10-ui/img/windows.ico />用户管理')">
                    <img class="icon" src="/all/win10-ui/img/icon/website.png" />
                    <div class="title">用户管理</div>
                </div>
                <!-- VIP卡管理 -->
                <div class="shortcut" onclick="Win10.openUrl('/resume/vip/index', '<img class=icon src=/all/win10-ui/img/windows.ico />VIP管理')">
                    <img class="icon" src="/all/win10-ui/img/icon/website.png" />
                    <div class="title">VIP等级管理</div>
                </div>
                <!-- 简历类型管理 -->
                <div class="shortcut" onclick="Win10.openUrl('/resume/block/index', '<img class=icon src=/all/win10-ui/img/windows.ico />简历类型管理')">
                    <img class="icon" src="/all/win10-ui/img/icon/website.png" />
                    <div class="title">简历类型管理</div>
                </div>

                <div class="shortcut" onclick="Win10.openUrl('http://win10ui.yuri2.cn',
                 '<img class=\'icon\' src=\'/all/win10-ui/img/icon/win10.png\'/>Win10-UI官网')">
                    <img class="icon" src="/all/win10-ui/img/icon/win10.png" />
                    <div class="title">Win10-UI官网</div>
                </div>
                <div class="shortcut" onclick="window.open('./demo.html')">
                    <img class="icon" src="/all/win10-ui/img/icon/demo.png" />
                    <div class="title">查看DEMO</div>
                </div>
                <!-- 编辑简历 -->
                <div class="shortcut" onclick="Win10.openUrl('/resume/message/index')">
                    <img class="icon" src="/all/win10-ui/img/icon/res_edit_message.png" />
                    <div class="title">编辑信息</div>
                </div>
            </div>
            <div id="win10-desktop-scene"></div>
        </div>
        <div id="win10-menu" class="hidden">
            <div class="list win10-menu-hidden animated animated-slideOutLeft">
                <div class="item" onclick="Win10.exit()">
                    <i class="black icon fa fa-power-off fa-fw"></i><span class="title">推出登录</span>
                </div>
            </div>
            <div class="blocks">
                <div class="menu_group">
                    <div class="title">您已登录</div>
                    <div class="block" loc="1,1" size="6,4">
                        <div class="content">
                            <div style="font-size:100px;line-height: 132px;height: 132px;margin: 0 auto ;display: flex;flex-direction: row;justify-content: center;align-items: flex-end;" class="win10-block-content-text">
                                <img src="https://zxjxj.com/all/home/images/user-4.jpg" style="height: 120px;">
                            </div>
                            <div class="win10-block-content-text" style="font-size: 22px">{{$userinfo->name}},欢迎您</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="win10-menu-switcher"></div>
        </div>
        <div id="win10_command_center" class="hidden_right">
            <div class="title">
                <h4 style="float: left">消息中心 </h4>
                <span id="win10_btn_command_center_clean_all">全部清除</span>
            </div>
            <div class="msgs"></div>
        </div>
        <div id="win10_task_bar">
            <div id="win10_btn_group_left" class="btn_group">
                <div id="win10_btn_win" class="btn"><span class="fa fa-windows"></span></div>
                <!-- <div class="btn" id="win10-btn-browser"><span class="fa fa-internet-explorer"></span></div> -->
            </div>
            <div id="win10_btn_group_middle" class="btn_group"></div>
            <div id="win10_btn_group_right" class="btn_group">
                <div class="btn" id="win10_btn_time"></div>
                <div class="btn" id="win10_btn_command"><span id="win10-msg-nof" class="fa fa-comment-o"></span></div>
                <div class="btn" id="win10_btn_show_desktop"></div>
            </div>
        </div>
    </div>
</body>

</html> 