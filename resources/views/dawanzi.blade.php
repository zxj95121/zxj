<!DOCTYPE html>
<html>
<head>
	<title>大丸子</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			width: 100%;
		}
		#div{
			background-color: #29B721;
			font-size: 6rem;
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: space-around;
			flex-wrap: wrap;
		}
		#div span{
			width: 100%;
			text-align: center;
			color: #FFF;
		}
	</style>
</head>
<body style="height: auto;">
	<div id="div" style="width: 100%;">
		<span>大</span>
		<span>丸</span>
		<span>子</span>
	</div>
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


        var height = document.documentElement.clientHeight;
        document.getElementById('div').style.height = height+'px';
	</script>
</body>
</html>