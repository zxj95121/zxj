<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>张贤健的诗集之恨琴文集</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="张贤健">
	<meta name="keywords" content="张贤健,恨琴文集, 张贤健的诗集, 安师大张贤健"/>
	<!-- <meta name="baidu-site-verification" content="lX0mR46Fv3" /> -->
	<meta name="description" content="张贤健的诗集"/>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/all/home/css/bootstrap.css">

	<style type="text/css">
		html, #page{
			color: #fff;
    		/*background: #FF9000;*/
			background: none !important;
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
	<script src="/all/home/snow/xiaxue.js"></script>
	<!-- Bootstrap -->
	<script src="/all/home/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$.ajaxSetup({
			'headers': {
				'X-CSRF-TOKEN': '{{csrf_token()}}'
			}
		})

		var prefix = '{{$prefix}}';
		var page = 2;

		var temp = 0;//不在请求

		$(function(){
			var height = $(window).height();
			
			window.onscroll = function() {
				var top = $(window).scrollTop();

				var total_height = $('#page').height();
				var cha = total_height - height;
				
				if (cha - top < 50) {

					if (temp > 0) {
						return false;
					}
					temp = 1;//在请求
					//快到底了
					$.ajax({
						url: '/poem_some/' + (page++),
						type: 'post',
						dataType: 'json',
						success: function(data){
							// console.log('fa', data.data)
							// temp = 0;
							if (data.data.length == 0) {
								temp = 2;//已经请求到底部，所有的诗都请求完了
								// console.log('请求完成' + temp)
								return false;
							} else {
								temp = 0;
							}

							if (data.code == 0) {
								for (var i in data.data) {
									var dom = $('.rowwrap:last');
									var rowwrap = dom.find('a').length;

									if (rowwrap < 3) {
										dom.append('<a href="/poem/poem_single/' + data.data[i].id + '"> <div class="col-md-4 div.col-sm-12 flexwrap"> <div class="flex"> <img src="' + prefix + '' + data.data[i].url + '" alt="' + data.data[i].title + '"> <h3>' + data.data[i].title + '</h3> <div>' + data.data[i].content + '</div> </div> </div> </a>');
									} else {
										dom.after('<div class="row rowwrap"><a href="/poem/poem_single/' + data.data[i].id + '"> <div class="col-md-4 div.col-sm-12 flexwrap"> <div class="flex"> <img src="' + prefix + '' + data.data[i].url + '" alt="' + data.data[i].title + '"> <h3>' + data.data[i].title + '</h3> <div>' + data.data[i].content + '</div> </div> </div> </a> </div>');
									}
									// console.log(rowwrap);
								}
							}
						},
						error: function(){
							temp = 0;//请求完成
						}
					})
				}
			}
		})

		
	</script>

	<!-- <script type="text/javascript" src="/all/home/js/vue2.5.js"></script> -->
	<!-- <script>
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
	</script> -->
	</body>
</html>

