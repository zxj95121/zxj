@extends('algorithm.layout')
@section('title', '算法测试-PHP')

@section('style')
    <meta name="csrf_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/all/admin/assets/codemirror/codemirror.css" />
    <link rel="stylesheet" href="/all/admin/assets/codemirror/ambiance.css">
@endsection
@section('list')
    <div class="row userinfoRow" onclick="window.location.href='{{$userinfo['href']}}';">
        <img src="{{$userinfo['headimgurl']}}" id="headimg">
        <h5 id="nickname">{{$userinfo['account']}}</h5>
    </div>
    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="has-submenu actived active">
                <a href="#">
                    <span class="badge badge-sm left bg-purple count">1</span>
                    <span class="nav-label">青铜题</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#">
                    <span class="badge badge-sm left bg-purple count">2</span>
                    <span class="nav-label">白银题</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#">
                    <span class="badge badge-sm left bg-purple count">3</span>
                    <span class="nav-label">黄金题</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#">
                    <span class="badge badge-sm left bg-purple count">4</span>
                    <span class="nav-label">白金题</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#">
                    <span class="badge badge-sm left bg-purple count">5</span>
                    <span class="nav-label">钻石题</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection

@section('content')
    <header class="row headerRow">

        <!-- Search -->
        {{--<form role="search" class="navbar-left app-search pull-left hidden-xs">--}}
            {{--<input type="text" placeholder="题目标题、编号" class="form-control">--}}
        {{--</form>--}}

        <h4 style="font-weight: bold;color: #000;">1000 最大公约数
            <button type="button" class="btn btn-info btn-rounded m-b-5">
                <i class="glyphicon glyphicon-time"></i>
                时间限制100ms
            </button>
        </h4>



    </header>

    <div class="row divRow">
        <div class="col-md-9">
            <div class="panel panel-primary questionPanel">
                <div class="panel-heading">
                    <h3 class="panel-title">题目描述</h3>
                </div>
                <div class="panel-body">
                    <p>在一个4*4的棋盘上摆放了14颗棋子，其中有7颗白色棋子，7颗黑色棋子，有两个空白地带，任何一颗黑白棋子都可以向上下左右四个方向移动到相邻的空格，这叫行棋一步，黑白双方交替走棋，任意一方可以先走，如果某个时刻使得任意一种颜色的棋子形成四个一线（包括斜线），这样的状态为目标棋局。</p>
                </div>
            </div>
            <div class="panel panel-primary questionPanel">
                <div class="panel-heading">
                    <h3 class="panel-title">输入描述</h3>
                </div>
                <div class="panel-body">
                    <p>从文件中读入一个4*4的初始棋局，黑棋子用B表示，白棋子用W表示，空格地带用O表示。</p>
                </div>
            </div>

            <div class="panel panel-primary questionPanel">
                <div class="panel-heading">
                    <h3 class="panel-title">输出描述</h3>
                </div>
                <div class="panel-body">
                    <p>用最少的步数移动到目标棋局的步数。</p>
                </div>
            </div>
            <div class="panel panel-primary questionPanel">
                <div class="panel-heading">
                    <h3 class="panel-title">样例输入</h3>
                </div>
                <div class="panel-body">
                    <p>BWBO
                        WBWB
                        BWBW
                        WBWO</p>
                </div>
            </div>
            <div class="panel panel-primary questionPanel">
                <div class="panel-heading">
                    <h3 class="panel-title">样例输出</h3>
                </div>
                <div class="panel-body">
                    <p>6</p>
                </div>
            </div>

            <div class="questionPanel">
                <textarea id="code2" name="code">
                </textarea>

                <button id="codeBtn" type="submit" class="btn btn-primary btn-icon btn-block" style="margin-top: 15px;"><i class="fa fa-thumbs-o-up"></i> 提 交</button>
            </div>

        </div>

        <div class="col-md-3 resultDataDiv" style="text-align: center;padding-top:13px;">
            <h4>通过：<i class="ion-ios7-checkmark" style="color: forestgreen;"></i> 3次</h4>
            <h4>提交：<i class="ion-ios7-compose-outline"></i> 10次</h4>
            <div class="chart easy-pie-chart-4" data-percent="56">
                <span class="percent">56</span>
                <canvas height="110" width="110"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/all/admin/assets/easypie-chart/easypiechart.min.js"></script>
    <script src="/all/admin/assets/easypie-chart/jquery.easypiechart.min.js"></script>
    <script src="/all/admin/assets/codemirror/codemirror.js"></script>
    <script src="/all/admin/assets/codemirror/formatting.js"></script>
    {{--<script src="/all/admin/assets/codemirror/xml.js"></script>--}}
    <script src="/all/admin/assets/codemirror/javascript.js"></script>
    {{--<script src="/all/admin/assets/codemirror/custom.codemirror.js"></script>--}}
    <script>
        var account = '{{$userinfo['account']}}';
    </script>
    <script src="/all/algorithm/index/algorithm.js"></script>
@endsection