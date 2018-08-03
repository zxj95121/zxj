<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>张贤健的诗集之健歌爱吟诗</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
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
			width: 100%;
			height: 100%;
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
		#page .rowwrap{
			margin: 0;
		}
		#page .rowwrap a{
			text-decoration: none;
			color: #FFF;
		}
	</style>
	</head>
	<body>

	
	<div id="page" class=".container-fluid">
		@foreach($poems as $key => $v)
		@if($key %3 == 0)
		@php $last = $key; @endphp
		<div class="row rowwrap">
		@endif
			<a href="/poem/poem_single/{{$v['id']}}">
				<div class="col-md-4 div.col-sm-12 flexwrap">
					<div class="flex">
						<img src="{{$prefix}}{{$v['url']}}" alt="{{$v['title']}}">
						<h3>{{$v['title']}}</h3>
						<div>{!!$v['content']!!}</div>
					</div>
				</div>
			</a>
		@if($key - $last == 2)
		</div>
		@endif
		@endforeach
	</div> 

	<!-- jQuery -->
	<script src="/all/home/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="/all/home/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$.ajaxSetup({
			'headers': {
				'X-CSRF-TOKEN': '{{csrf_token()}}'
			}
		})
	</script>

	<!-- <script type="text/javascript" src="/all/home/js/vue2.5.js"></script> -->
	<script>
		return false;
		var app = new Vue({
		  	el: '#page',
		  	data: {
		    	http: 'https://admin.zxjxj.com',
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
		  						var arr = new Array();
		  						var l = 0;

		  						data.data.map((item, index) => {
		  							// index = parseInt(index);

		  							if (index % 3 == 0) {
		  								if (index != 0) {
		  									that.poems.push(arr); 
		  								}

		  								arr = new Array();
		  								l = 0;
		  							}
		  							arr[l++] = item;
		  						})
		  						
		  						that.poems.push(arr);
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

