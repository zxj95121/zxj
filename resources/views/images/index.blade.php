<!DOCTYPE html>
<html>
<head>
	<title>图集</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<meta name="keywords" content="张贤健,图集"/>
	<link rel="stylesheet" type="text/css" href="/all/home/css/bootstrap.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			width: 100%;
		}
		#content{
			width: 1200px;
			margin: 0 auto;
			background: #abab3e;
			height: 1233px;
			position: relative;
		}
		#images{
			width: 930px;
			padding: 20px;
		}
		#users{
			width: 270px;
			position: absolute;
			top: 0;
			right: 0;
			height: 339px;
			background: #b3ba39;
		}
		.top{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
			align-items: center;
			height: 30px;
		}
		.title{
			/*padding-left: 20px;*/
			font-weight: bold;
			font-size: 20px;
/*			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;*/
		}
		.line{
			/*width: 100%;*/
			width: 0;
			height: 5px;
			background: #eee;
			/*margin-right: 20px;*/
		}
	</style>
</head>
<body>
	<div id="content">
		<div id="images">
			<div class="image">
				<div class="top">
					<div class="title">wells的图集</div>
					<div class="line"></div>
				</div>
				<div class="middle">
					<img src="http://demo.cssmoban.com/cssthemes5/cpts_1422_cdd/images/a1.jpg">
					<img src="http://demo.cssmoban.com/cssthemes5/cpts_1422_cdd/images/a2.jpg">
					<img src="http://demo.cssmoban.com/cssthemes5/cpts_1422_cdd/images/a1.jpg">
				</div>
			</div>
		</div>
		<div id="users">
			
		</div>
	</div>
	<script type="text/javascript" src="/all/home/js/jquery.min.js"></script>
	<script type="text/javascript" src="/all/home/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var fun = function(doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    if(!clientWidth) return;
                    //这里是假设在1280px宽度设计稿的情况下，1rem = 40px；
                    //可以根据实际需要修改
                    docEl.style.fontSize = 40 * (clientWidth / 640) + 'px';
                };
            if(!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        }
        fun(document, window);


        // var height = document.documentElement.clientHeight;
        // document.getElementById('div').style.height = height+'px';
        $(function(){
        	$('.line').each(function(){
        		var width = $(this).prev().width();
        		console.log(width)
        		$(this).css('width', 'calc(100% - ' + (width + 21) + 'px)');
        	})
        })
	</script>
</body>
</html>