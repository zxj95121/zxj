<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>demo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
		<link href="" rel="stylesheet">
	<style type="text/css">
	#modelView{background-color:#DDDDDD;z-index:0;opacity:0.7;height: 100%;width: 100%;position: relative;}
	.playvideo{padding-top: auto;z-index: 9999;position: relative;}
	.zy_media{z-index: 999999999}
	</style>
<link rel="stylesheet" href="/mediaPlay/zy.media.min.css">
	</head>
	<body onmousewheel="return false;">
	
	<div class="playvideo">
	<div class="zy_media">
    	<video poster="/images/videoShow.png" data-config='{"mediaTitle": "标题另算--视频"}'>
        	<source src="http://www.w3cschool.cc/try/demo_source/mov_bbb.mp4" type="video/mp4">
      	  您的浏览器不支持HTML5视频
   	 </video>

	</div>
	<div id="modelView">&nbsp;</div>
	</div>

<script src="/plugin/mediaPlay/zy.media.min.js"></script>
<script>
//document.documentElement.style.overflow='hidden';
 document.body.style.overflow='hidden';
    zymedia('video',{autoplay: true});
    var screenheight = window.screen.height/2;
    $("#modelView").width(window.screen.width);
    $("#modelView").height(window.screen.height);
    var videoheight = $(".zy_media").height()/2;
    var padding_top = screenheight-videoheight;
    $(".playvideo").css({"top":padding_top});
    $("#modelView").css({"margin-top":-1*(padding_top+$(".zy_media").height())});

</script>
	</body>
</html>