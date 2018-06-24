<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>张贤健-溪山行旅</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="author" content="张贤健"> -->
	<meta name="keywords" content="张贤健, 张贤健的诗集, 安师大张贤健"/>
	<!-- <meta name="baidu-site-verification" content="lX0mR46Fv3" /> -->
	<meta name="description" content="张贤健的诗集"/>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/all/home/css/bootstrap.css">

	<style type="text/css">
		html, #page{
			color: #fff;
    		background: #FF9000;
		}
		h3,.feature-copy p{
			font-family: "微软雅黑";
		}
		.flex{
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			align-items: center;
			padding: 20px 0 40px;
		}
		.flex img{
			width: 180px;
		    border-radius: 50%;
		    height: 180px;
		}
		.flex div{
			width: 80%;
		}
		#rowwrap{
			margin: 0;display: flex;flex-direction: row;flex-wrap: wrap;
		}
	</style>
	</head>
	<body>

	
	<div id="page">
		<div class="row" id="rowwrap">
			<div class="col-md-4 div.col-sm-12 flex" v-for="(item, index) in poems">
				<img v-bind:src="http + item.url" alt="">
				<h3>@{{item.title}}</h3>
				<div v-html="item.content"></div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="/all/home/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="/all/home/js/bootstrap.min.js"></script>

	<script>
		(function(){
		    var bp = document.createElement('script');
		    var curProtocol = window.location.protocol.split(':')[0];
		    if (curProtocol === 'https') {
		        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
		    }
		    else {
		        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
		    }
		    var s = document.getElementsByTagName("script")[0];
		    s.parentNode.insertBefore(bp, s);
		})();
	</script>

	<script type="text/javascript">
		$.ajaxSetup({
			'headers': {
				'X-CSRF-TOKEN': '{{csrf_token()}}'
			}
		})
	</script>

	<script type="text/javascript" src="/all/home/js/vue2.5.js"></script>
	<script>
		var app = new Vue({
		  	el: '#page',
		  	data: {
		    	http: 'http://admin.zxjxj.com',
		    	poems: [],
		  	},
		  	created: function() {
		  		// console.log(this.message);
		  		this.getPoems();//获取诗集并初始化
		  		// var that = this;
		  	},
		  	methods: {
		  		getPoems: function(e) {
		  			var that = this;
		  			$.ajax({
		  				url: this.http + '/api/poem/allpoems',
		  				type: 'post',
		  				dataType: 'json',
		  				data: {},
		  				success: function(data) {
		  					if (data.code == 0) {
		  						that.poems = data.data; 
		  					}
		  					console.log(that.poems);
		  				}
		  			})
		  		}
		  	}
		})
	</script>
	</body>
</html>

