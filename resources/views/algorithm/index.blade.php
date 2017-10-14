@extends('algorithm.layout')
@section('title', '算法测试-PHP')
@section('style')
    <meta name="csrf_token" content="{{csrf_token()}}">
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
        <form role="search" class="navbar-left app-search pull-left hidden-xs">
            <input type="text" placeholder="题目标题、编号" class="form-control">
        </form>

    </header>

    <div class="row divRow">

        <div class="panel panel-default questionPanel">
            <!-- Default panel contents -->
            <div class="panel-heading">青铜题组</div>

            <!-- Table -->
            <table class="table questionTable">
                <thead>
                    <tr>
                        <th><i class="ion-ios7-star"></i></th>
                        <th>ID</th>
                        <th class="col-md-5">题目名称</th>
                        <th>难度等级</th>
                        <th>通过人数</th>
                        <th>提交正确率</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-id="1000">
                        <td></td>
                        <td>1000</td>
                        <td>最大公约数</td>
                        <td><span class="label label-default">青铜（很容易）</span></td>
                        <td><span class="label label-info">100人</span></td>
                        <td>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-success progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                    36%
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr data-id="1001">
                        <td></td>
                        <td>1001</td>
                        <td>最大公约数</td>
                        <td><span class="label label-default">青铜（很容易）</span></td>
                        <td><span class="label label-info">100人</span></td>
                        <td>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-success progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                    36%
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr data-id="1002">
                        <td></td>
                        <td>1002</td>
                        <td>最大公约数</td>
                        <td><span class="label label-default">青铜（很容易）</span></td>
                        <td><span class="label label-info">100人</span></td>
                        <td>
                            <div class="progress progress-lg">
                                <div class="progress-bar progress-bar-success progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width: 36%;">
                                    36%
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script src="/all/algorithm/index/algorithm.js"></script>
@endsection