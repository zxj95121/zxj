<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
     <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <title>星际畅游</title>
    <link rel="stylesheet" type="text/css" href="/all/admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/all/mui/css/mui.min.css">
    <style type="text/css">
    </style>

</head>
<body>
<!--在这里编写你的代码-->
    <h3> </h3>
    <div class="mui-content">
        <ul class="mui-table-view">
            @foreach ($videos as $value)
            <li class="mui-table-view-cell">
                <a class="mui-navigate-right" url="/father/shareVideo?id={{$value['id']}}">
                    {{$value['desc']}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    

    <script type="text/javascript" src="/all/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="/all/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/all/win10-ui/component/layer-v3.0.3/layer/layer.js"></script>

    <script type="text/javascript">
        $('li > a').click(function(){
            var url = $(this).attr('url');
            window.top.location.href = url;
        })
    </script>

</body>
</html>