<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$poem['title']}}-张贤健的诗</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
	<!-- <meta name="author" content="张贤健"> -->
	<meta name="keywords" content="张贤健, 张贤健的诗集, {{$poem['title']}}"/>
	<!-- <meta name="baidu-site-verification" content="lX0mR46Fv3" /> -->
	<meta name="description" content="张贤健的诗"/>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/all/home/css/bootstrap.css">

	<style type="text/css">
		html, #page{
			color: #fff;
    		background: #FF9000;
		}
		#page .rowwrap{
			margin: 0;
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
	</style>
	</head>
	<body>

	
	<div id="page" class=".container-fluid">
		<div class="row rowwrap">
			<div class="col-md-4 col-md-offset-4 col-sm-12">
				<div class="flex">
					<img src="{{$prefix}}{{$poem['url']}}" alt="{{$poem['title']}}">
					<h3>{{$poem['title']}}</h3>
					<div>{!!$poem['content']!!}</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="/all/home/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="/all/home/js/bootstrap.min.js"></script>

<!-- 	<script type="text/javascript">
		$.ajaxSetup({
			'headers': {
				'X-CSRF-TOKEN': '{{csrf_token()}}'
			}
		})
	</script> -->

	</body>
</html>

