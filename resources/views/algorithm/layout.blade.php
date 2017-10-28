<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="/all/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/all/admin/css/style.css" rel="stylesheet">
    <link href="/all/algorithm/index/layout.css" rel="stylesheet">
    <link href="/all/admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet">
    <link href="/all/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    @yield('style')
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <nav class="algor-nav">
                <div class="algor-nav-item-title" onclick="window.location.reload();">算法测试（PHP）</div>
                <a class="algor-nav-item" href="#">评测记录</a>
                <a class="algor-nav-item {!!(Request::is('algorithm'))?'active':''!!}" href="/algorithm">题库</a>
                <a class="algor-nav-item" href="#">增改题目</a>
                <a class="algor-nav-item" href="#">个人记录</a>
            </nav>
        </div>
    </div>
</div>

<div class="list">

    @yield('list')
</div>

<section class="content" style="margin-top: 50px">
    {{--<div class="container-fluid">--}}
        @yield('content')
    {{--</div>--}}
</section>

{{--引入bootstrap和jquery--}}
<script src="/all/admin/js/jquery-1.10.2.min.js"></script>
<script src="/all/admin/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $.ajaxSetup({
           'headers': {
               'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
           }
        });
    })
</script>
@yield('script')
<script>
</script>
</body>
</html>