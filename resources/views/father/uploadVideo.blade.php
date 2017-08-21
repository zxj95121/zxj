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

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="/plugin/AmazeUI/assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/plugin/AmazeUI/assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- <meta name="apple-mobile-web-app-title" content="Amaze UI"/> -->
  <link rel="apple-touch-icon-precomposed" href="/plugin/AmazeUI/assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="/plugin/AmazeUI/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="/plugin/AmazeUI/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/plugin/AmazeUI/assets/css/app.css">
</head>
<body>
<!--在这里编写你的代码-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/js/jquery-1.10.2.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/plugin/AmazeUI/assets/js/amazeui.min.js"></script>
<button type="button" class="am-btn am-btn-primary am-btn-block">分享新视频</button>
<!-- <div data-am-widget="titlebar" class="am-titlebar am-titlebar-multi" >
    <h2 class="am-titlebar-title ">
        分享新视频
    </h2>
</div> -->
<div class="am-g" style="background: #f5f5f5;">
  <div class="am-g-12">
    <form class="am-form" action="/father/fileupload" method="post" enctype=multipart/form-data>
      <fieldset>
        <legend>填写内容</legend>

        <div class="am-form-group">
          <label for="doc-ipt-email-1">视频介绍</label>
          <input type="text" class="" id="description" name="description" placeholder="简单的十个字以内就行">
        </div>
        <div class="am-form-group am-form-file">
          <button type="button" class="am-btn am-btn-danger am-btn-sm">
          <i class="am-icon-cloud-upload"></i> 选择要上传的视频文件</button>
          <input id="doc-form-file" type="file" name="file">
        </div>
        <div id="file-list"></div>
        {{csrf_field()}}
        <p><button type="submit" class="am-btn am-btn-success" style="width: 50%;border-radius: 3px;margin-top: 5px;">提交</button></p>
      </fieldset>
    </form>
    
  </div>
</div>

<script>
    $(function() {
        $('#doc-form-file').on('change', function() {
            var fileNames = '';
            $.each(this.files, function() {
                fileNames += '<span class="am-badge">' + this.name + '</span> ';
            });
            $('#file-list').html(fileNames);
        });
    });
</script>
</body>
</html>