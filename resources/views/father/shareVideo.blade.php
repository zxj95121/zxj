<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>星际畅游的视频分享</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<script src="/js/jquery-1.10.2.js"></script>
		<link href="" rel="stylesheet">
	<style type="text/css">
	#modelView{background-color:#DDDDDD;z-index:0;opacity:0.7;height: 100%;width: 100%;position: relative;}
	.playvideo{padding-top: auto;z-index: 9999;position: relative;}
	.zy_media{z-index: 999999999}
	</style>
<link rel="stylesheet" href="/plugin/mediaPlay/zy.media.min.css">
	</head>
	<body onmousewheel="return false;">
		<img src="/father/headimg.jpg" style="height: 0px;opacity: 0;">
	
	<div class="playvideo">
	<div class="zy_media">
    	<video poster="/images/father/videoShow.png" data-config='{"mediaTitle": "{{$obj->desc}}"}'>
        	<source src="https://v.qq.com/iframe/preview.html?vid=g0516zex7j8&amp;width=500&amp;height=375&amp;auto=0" type="video/mp4">
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
    var height = document.documentElement.clientHeight;
    var width = document.body.clientWidth;
    // var screenheight = window.screen.height/2;
    $("#modelView").width(width);
    $("#modelView").height(height);
    // var videoheight = $(".zy_media").height()/2;
    // var padding_top = screenheight-videoheight;
    var padding_top = '100px';
    $(".playvideo").css({"top":padding_top});
    // $("#modelView").css({"margin-top":-1*(padding_top+$(".zy_media").height())});

</script>
	</body>
</html>