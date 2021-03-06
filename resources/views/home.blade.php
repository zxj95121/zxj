<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>张贤健-溪山行旅</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="张贤健">
	<meta name="keywords" content="张贤健, wells, php, PHP, laravel, 微信, 恨琴文集 "/>
	<!-- <meta name="baidu-site-verification" content="lX0mR46Fv3" /> -->
	<meta name="description" content="自己选择的不平凡，所有坎坷都得去挑战。"/>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	

	

  	<!-- Facebook and Twitter integration -->

	<!-- <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> -->
	 
	<!-- Animate.css -->
	<link rel="stylesheet" href="/all/home/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/all/home/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/all/home/css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="/all/home/css/style.css">

	<!-- alert -->
	<link href="/all/admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

	<!-- Modernizr JS -->
	<script src="/all/home/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="/all/home/css/home.css">
    <link type="text/css" rel="styleSheet" href="/all/home/css/mouse.css">
		<style>
			@media screen and (max-width: 500px) {
				#fh5co-features {
					background: #FF9000 !important;
				}
			}
		</style>
	</head>
	<body>
		
	<!-- <div class="fh5co-loader"></div> -->
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background:#FF9000;position: relative;" data-stellar-background-ratio="0.5">
		<!--<h2 style="margin: 0;"><a href="https://www.zhangxianjian.com/poem/poem_single/301" target="_blank" style="width: 100%;height: 36px;font-size: 20px;line-height: 36px;text-align: center;
		background: #9c9e03;background-color: #520b28;color: #FFF;position: absolute;top: 0;z-index: 333;letter-spacing: 0px;">你永远不懂我伤悲，像白天不懂夜的黑。</a></h2>-->
		<div class="overlay"></div>
		<div class="container">
			<div class="row" style="z-index: 444;position: relative;top: 91px;">
				<p style="font-size: 33px;text-align: center;color: #FFF;background-color: #101010;">愿逝者安息，生者坚强，祖国昌盛！</p>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style=""><img src="/all/home/images/user-4.jpg" alt="张贤健" style="height: 100%;border-radius: 50%;"></div>
							<h1><span>Wells 张贤健</span></h1>
							<h3><span>安师大那么大，有志青年何其多，只是大多未尝一见！</span></h3>
							<br>
							<p>
								<ul class="fh5co-social-icons contactUl">
									<li id="codeLi1" style="width: 50px;height: 68px;margin-right: 40px;position: relative;cursor: pointer;">
										<div class="qqCode code"><img src="/all/home/images/qqCode.jpg" style="width: 100%;height: 100%;"></div>
										<div class="icon-qqChat"></div>
									</li>
									<li id="codeLi2" style="width: 58px;height: 68px;margin-right: 28px;position: relative;cursor: pointer;">
										<div class="icon-weChat"></div>
										<div class="wechatCode code"><img src="/all/home/images/wechatCode.jpg" style="width: 100%;height: 100%;"></div>
									</li>
									<li id="codeLi3" style="width: 58px;height: 68px;margin-right: 10px;position: relative;cursor: pointer;">
										<div class="icon-weiboChat"></div>
										<div class="weiboCode code"><img src="/all/home/images/weiboCode.png" style="width: 100%;height: 100%;"></div>
									</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="http://www.zhangxianjian.com/resume" style="width: 100%;height: 36px;font-size: 20px;line-height: 36px;text-align: center;
		background: #1f5242;color: #FFF;z-index: 333;letter-spacing: 20px;position: absolute;bottom: 0;left: 0;">张贤健的个人简历</a>
	</header>
	<div style="background: #FF9000;height: 640px;">
		<div class="wrap" style="margin-top: 200px auto;top: 250px;">
	        <!--部署内外层图片-->
	        <div class="cube">
	            <!--前面图片 -->
	            <div class="out_front">
	                <img src="{{$prefix}}{{$poems[0]['url']}}" class="pic" title="张贤健的诗-{{$poems[0]['title']}}" alt="{{$poems[0]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[0]['id']}}';">
	            </div>
	            <!--后面图片 -->
	            <div class="out_back">
	                <img src="{{$prefix}}{{$poems[1]['url']}}" class="pic" title="张贤健的诗-{{$poems[1]['title']}}"  alt="{{$poems[1]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[1]['id']}}';">
	            </div>
	            <!--左面图片 -->
	            <div class="out_left">
	                <img src="{{$prefix}}{{$poems[2]['url']}}" class="pic" title="张贤健的诗-{{$poems[2]['title']}}" alt="{{$poems[2]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[2]['id']}}';">
	            </div>
	            <!--右面图片 -->
	            <div class="out_right">
	                <img src="{{$prefix}}{{$poems[3]['url']}}" class="pic" title="张贤健的诗-{{$poems[3]['title']}}" alt="{{$poems[3]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[3]['id']}}';">
	            </div>
	            <!--上面图片 -->
	            <div class="out_top">
	                <img src="{{$prefix}}{{$poems[4]['url']}}" class="pic" title="张贤健的诗-{{$poems[4]['title']}}" alt="{{$poems[4]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[4]['id']}}';">
	            </div>
	            <!--下面图片 -->
	            <div class="out_bottom">
	                <img src="{{$prefix}}{{$poems[5]['url']}}" class="pic" title="张贤健的诗-{{$poems[5]['title']}}" alt="{{$poems[5]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[5]['id']}}';">
	            </div>

	            <!--小正方体 -->
	            <span class="in_front">
	                    <img src="{{$prefix}}{{$poems[6]['url']}}" class="in_pic" title="张贤健的诗-{{$poems[6]['title']}}" alt="{{$poems[6]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[6]['id']}}';">
	                </span>
	            <span class="in_back">
	                    <img src="{{$prefix}}{{$poems[7]['url']}}" class="in_pic" title="张贤健的诗-{{$poems[7]['title']}}" alt="{{$poems[7]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[7]['id']}}';">
	                </span>
	            <span class="in_left">
	                    <img src="{{$prefix}}{{$poems[8]['url']}}" class="in_pic" title="张贤健的诗-{{$poems[8]['title']}}" alt="{{$poems[8]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[8]['id']}}';">
	                </span>
	            <span class="in_right">
	                    <img src="{{$prefix}}{{$poems[9]['url']}}" class="in_pic" title="张贤健的诗-{{$poems[9]['title']}}" alt="{{$poems[9]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[9]['id']}}';">
	                </span>
	            <span class="in_top">
	                    <img src="{{$prefix}}{{$poems[10]['url']}}" class="in_pic" title="张贤健的诗-{{$poems[10]['title']}}" alt="{{$poems[10]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[10]['id']}}';">
	                </span>
	            <span class="in_bottom">
	                    <img src="{{$prefix}}{{$poems[11]['url']}}" class="in_pic" title="张贤健的诗-{{$poems[11]['title']}}" alt="{{$poems[11]['title']}}" onclick="window.location.href='/poem/poem_single/{{$poems[11]['id']}}';">
	                </span>
	        </div>
	    </div>
	</div>
	<div id="fh5co-features" style="background-color: #FF9000 !important;" class="animate-box">
		<div class="container" id="poem">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 2rem;">
						<h2>恨琴文集</h2>
					</div>
				</div>
				
					<div class="row">
						@foreach($poems as $key => $value)
						@if ($key < 3)
						<a href="/poem/poem_single/{{$value['id']}}" target="_blank">
							<div class="col-md-4 .col-xs-12 col-sm-12 text-center poemcol">
								<div class="feature-left">
									<span class="icon">
										<!-- <i class="icon-paintbrush"></i> -->
										<img src="{{$prefix}}{{$value['url']}}" alt="{{$value['title']}}">
									</span>
									<div class="feature-copy">
										<h3>{{$value['title']}}</h3>
									
										<p>{!!$value['content']!!}</p>
									</div>
								</div>
							</div>
						</a>
						@else
						@endif
						@endforeach
					</div>

					<div id="poemBtn" class="row">
						<a id="seemorepoem" class="btn" href="/poem" target="_blank">
							查看更多诗集 <i class="icon-arrow-long-right"></i>
						</a>
					</div>
			</div>
		</div>
	</div>
	

	<div id="fh5co-features"  style="background-color: #FF9000 !important;" class="animate-box">
		<div class="container">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>技术特长</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
							<div class="feature-copy">
								<h3>网站开发</h3>
								<p>萌芽于安师大计算机爱好者协会，初学于大一暑假，奋起于大三在蓝天.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-ribbon"></i>
							</span>
							<div class="feature-copy">
								<h3>PHP</h3>
								<p>萌芽于大二寒假一篇文档（微信公众平台从入门到精通）,用但是免费的新浪云作为服务器.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-mobile"></i>
							</span>
							<div class="feature-copy">
								<h3>移动端开发</h3>
								<p>起初由于在蓝天微信开发移动端网页，比如协会报名系统在使用时select元素遇到IOS不能用的坑.</p>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-4 text-center">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-linegraph"></i>
							</span>
							<div class="feature-copy">
								<h3>热衷新技术</h3>
								<p>跟倾向于自己喜欢的，以及力所能及，如果连PHP都没干好，行行接触一点也没用。</p>
							</div>
						</div>

					</div>

					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-tools"></i>
							</span>
							<div class="feature-copy">
								<h3>团队合作开发</h3>
								<p>起始于第一份工作，新方向网络，git版本控制，代码规范，影响我很多很多.</p>
							</div>
						</div>

					</div>
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>微信开发</h3>
								<p>同样起源于那篇文档（微信公众平台从入门到精通），后来，再到小程序开发。但是现在感觉还是没有更全方面的去接触微信API.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>我的经历</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-1.jpg);">
						<div class="desc">
							<h3>安徽师范大学</h3>
							<span>敬文图书馆</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-2.jpg);">
						<div class="desc">
							<h3>安师大蓝天论坛</h3>
							<span>微信团队，梦之起点。</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-3.jpg);">
						<div class="desc">
							<h3>安师大开源软件协会</h3>
							<span>浪在开源，关系友好</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-4.png);">
						<div class="desc">
							<h3>安师大发明创新协会</h3>
							<span>副会长，主要提供技术支撑。</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-5.png);background-size: 100% 100%;">
						<div class="desc">
							<h3>活动报名</h3>
							<span style="text-indent: 20px;">为协会举办活动提供报名，慢慢地发展为自动定制不同需求的即时报名系统，当他要面世的时候，学校强制使用myouth进行报名。一气之下删了所有代码。</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-6.jpg);">
						<div class="desc">
							<h3>杭州新方向网络</h3>
							<span style="text-indent: 20px;">步入的第一个公司，辞职后很久我才明白，我追求的不是较好的薪水，而是更好。追求的不是老生常谈的工作，而是有激情的工作。</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-7.png);background-size: 100% 100%;">
						<div class="desc">
							<h3>自己接手的第一个项目</h3>
							<span style="text-indent: 20px;">全职两个多月开发后，望着繁多的需求才明白：什么是 selfish，什么是 young，什么是 no shame ，什么是认不清自己。</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(/all/home/images/portfolio-8.jpg);">
						<div class="desc">
							<h3>技术起步的地方</h3>
							<span>不会忘记刚开始自学网页设计的艰难,却因某个信念...</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-started" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>志同道合，联系我!</h2>
					<a href="tel:17557286038"><p>Tel:17557286038</p></a>
					<!-- <p><a href="#" class="btn btn-default btn-lg">Contact Us</a></p> -->
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(/all/home/images/cover_bg_1.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box" style="background: #FF9000;">
			<h2 style="color: #FFF;">Contact</h2>
			<form id="contactForm" onsubmit="return leaveMessage();">

				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" id="name" class="form-control" placeholder="您的姓名" pattern="^.{2,10}$" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="number" id="qq" class="form-control" placeholder="您的QQ号" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="tel" class="form-control" placeholder="您的手机号" pattern="^1\d{10}$" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="您的自我介绍" required></textarea pattern="^.+$">
					</div>
				</div>
				<div class="form-group">
					<input type="submit" onclick="javascript:void(0);" style="color: #FF9000;font-weight: bold;height: 40px;box-shadow: none;" value="提交信息" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>

	<div id="friendly_link">
		
	</div>
	<div style="background-color: #FF9000;height: 38px;line-height: 38px;font-size: 16px;text-align: center;width: 100%;float: left;">
		<a href="http://www.beian.miit.gov.cn/" style="color: #FFF;">皖ICP备17018769号</a>
	</div>

	<!-- <div id="map" class="fh5co-map"></div> -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/all/home/js/jquery.min.js"></script>
{{--	<script src="/all/home/js/mouse.js"> </script>--}}
	<!-- jQuery Easing -->
	<script src="/all/home/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/all/home/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/all/home/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/all/home/js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<!-- <script src="/all/home/js/jquery.easypiechart.min.js"></script> -->
	<!-- Google Map -->

	<!-- <script src="/all/home/js/google_map.js"></script> -->
	<script src="/all/admin/assets/sweet-alert/sweet-alert.min.js"></script>
	<!-- Main -->
	<script src="/all/home/js/main.js"></script>

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
	<!-- 展示二维码 + 留言功能-->
	<script type="text/javascript" src="/all/home/js/showCode.js"></script>
	<!-- <script type="text/javascript" src="/all/home/js/vue2.5.js"></script> -->
	<!-- <script type="text/javascript" src="/all/home/js/home.js"></script> -->
	</body>
</html>

