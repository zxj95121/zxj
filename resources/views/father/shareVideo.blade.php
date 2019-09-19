<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>星际畅游的视频分享</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<script type="text/javascript" src="/all/home/js/jquery.min.js"></script>
		<link href="/father/css/share.css" rel="stylesheet">
	<style type="text/css">
	#modelView{background-color:#DDDDDD;z-index:0;opacity:0.7;height: 100%;width: 100%;position: relative;}
	.playvideo{padding-top: auto;z-index: 9999;position: relative;top:0;}
	.zy_media{z-index: 999999999}
	</style>
<link rel="stylesheet" href="/plugin/mediaPlay/zy.media.min.css">
	</head>
	<body>
	<!-- <body onmousewheel="return false;"> -->
		<!-- <img src="{{$obj['img_url']}}" style="width: 100%;" alt="视频展示图"> -->
	
	<div class="playvideo">
		<div class="zy_media">
	    	<video poster="/images/father/videoShow.png" data-config='{"mediaTitle": "{{$obj['desc']}}"}'>
	        	<source src='{{$obj["url"]}}' type="video/{{$obj['suffix']}}">
	      	  	您的浏览器不支持HTML5视频
	   	 	</video>
		</div>
		<!-- <div id="modelView">&nbsp;</div> -->
		<!-- <img src="{{$obj['img_url']}}"> -->
		<div id="content" style="top: 233px;position: relative;">
			<section class="editor" style="display: none;">
			    <div>
			        <div>
			            <section style="text-align:center;">
			                <section style="display: inline-block;margin-top: 35px;margin-bottom: 180px;">
			                    <section style=" box-sizing: border-box; width: 240px; clear: both;  height: 240px; border-radius: 50%; color: inherit;display:inline-block;">
			                        <img src="{{$obj['img_url']}}" style="border-radius:50%; box-sizing:border-box; color:inherit; display:inline-block; height:auto !important; width:100%"/>
			                    </section>
			                    <section style="border: 0px; box-sizing: border-box;  clear: both; overflow: hidden; margin-top: -270px;margin-left: 185px;">
			                        <section style="border: 5px solid rgb(254,254,254); box-sizing: border-box; width: 100px; clear: both; height: 100px; border-radius: 50%; color: inherit;display:inline-block;">
			                            <img src="{{$obj['img_url']}}" style="border-radius:50%; box-sizing:border-box; color:inherit; display:inline-block; height:auto !important; width:100%"/>
			                        </section>
			                    </section>
			                </section>
			            </section>
			        </div>
			    </div>
			</section>

			<div id="center95">
				<div class="ctitle">
					<div></div>
					<div>精选评论</div>
					<div></div>
				</div>

				<div class="comment">
					<div class="cimg">
						<img src="http://small.zhangxianjian.com/all/home/images/user-4.jpg" />
					</div>
					<div class="cright">
						<div class="cr-top">
							
							<div class="nickname">方忠</div>
							<div class="thumb">
								<i></i> 27
							</div>

						</div>
						<div class="content">新年快乐！</div>
					</div>
				</div>

<!-- 				<div class="comment">
					<div class="cimg">
						<img src="http://small.zhangxianjian.com/all/home/images/user-4.jpg" />
					</div>
					<div class="cright">
						<div class="cr-top">
							
							<div class="nickname">无名氏</div>
							<div class="thumb">
								<i></i> 27
							</div>

						</div>
						<div class="content">呵呵fdafdsafd大过年覅不敢给加分贵宾卡减肥的脸孔话费卡了哒</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

<script src="/plugin/mediaPlay/zy.media.min.js"></script>
<script>
//document.documentElement.style.overflow='hidden';
 // document.body.style.overflow='hidden';
    zymedia('video',{autoplay: true});
    var height = document.documentElement.clientHeight;
    var width = document.body.clientWidth;
    // var screenheight = window.screen.height/2;
    // $("#modelView").width(width);
    // $("#modelView").height(height);
    var videoheight = $("video").height();
    $('#content').css('top', videoheight);
    // var padding_top = screenheight-videoheight;
    // var padding_top = '100px';
    // $(".playvideo").css({"top":padding_top});
    // $("#modelView").css({"margin-top":-1*(padding_top+$(".zy_media").height())});

</script>
	</body>
</html>