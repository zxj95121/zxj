<!DOCTYPE html>
<html>
<head>
	<title>晶语料库下载</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/all/home/css/bootstrap.css">
	<link rel="stylesheet" href="/all/admin/css/bootstrap-reset.css">
	<style type="text/css">
		.container-fluid{
			/*background: #FFF;*/
		}
		.title{
			background: #0DB40F;
			font-size: 30px;
			color: #FFF;
			text-align: center;
			line-height: 70px;
		}
		.param{
			margin-top: 30px;
		}
		.param > div div:nth-of-type(1){
			background: #347CBC;
			height: 43px;
			color: #FFF;
			font-size: 16px;
			text-align: right;
			padding-right: 3%;
			line-height: 43px;
		}
		.param > div div:nth-of-type(2){
			background: #347CBC;
			height: 43px;
			color: #FFF;
			font-size: 16px;
			text-align: left;
			padding-left: 3%;
			line-height: 43px;
		}
	</style>
</head>
<body>
	<div class="container-fluid" style="padding: 0px;">
		<div class="row">
			<div class="col-md-12 title">
				自动抽取语料下载
			</div>
		</div>
		<div class="param">
			<div class="row">
				<div class="col-md-4 col-xs-4 col-sm-4">
					查找模式：
				</div>
				<div class="col-md-8 col-xs-8 col-sm-8">
					模式查询
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-4 col-sm-4">
					查询关键字：
				</div>
				<div class="col-md-8 col-xs-8 col-sm-8">
					<input type="text" value="对(x)来说" name="word" class="form-control" placeholder="请输入查询的规则">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-4 col-sm-4">
					左侧数字：
				</div>
				<div class="col-md-8 col-xs-8 col-sm-8">
					<input type="number" name="left_num" class="form-control" placeholder="请输入左侧数字数量" value="60">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-4 col-sm-4">
					右侧数字：
				</div>
				<div class="col-md-8 col-xs-8 col-sm-8">
					<input type="number" name="right_num" class="form-control" placeholder="请输入右侧数字数量" value="60">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-4 col-sm-4">
					下载条目数
				</div>
				<div class="col-md-8 col-xs-8 col-sm-8">
					<input type="number" name="download_num" class="form-control" placeholder="请输入要随机的数目" value="2000">
				</div>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" id="search" class="form-control" value="确认查询" name="" style="background: #0A9B0D;margin-top: 30px;color: #FFF;">
		</div>
	</div>

	<div id="numModal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
	  	<div class="modal-dialog" role="document">
	   		<div class="modal-content">
	      		<div class="modal-header">
	        		<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
	        			<h4 class="modal-title">下载提醒</h4>
	      		</div>
      			<div class="modal-body">
	        		<p>共搜索到条数<b id="num"></b>条</p>
	        		<div class="progress progress-md">
                      	<div class="progress progress-lg">
                        	<div id="loading" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 0%;color: #2447ce;">0%</div>
                    	</div>
	      			</div>
	      			<p id="tishi" style="color: red;font-size: 14px;display: none;"></p>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" id="cancle" class="btn btn-default" data-dismiss="modal">取消下载</button>
	        		<button type="button" id="download" class="btn btn-primary">确认下载</button>
	      		</div>
	    	</div><!-- /.modal-content -->
	  	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


	<script type="text/javascript" src="/all/admin/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/all/admin/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$.ajaxSetup({
			'headers': {
				'X-CSRF-TOKEN': '{{csrf_token()}}'
			}
		})
		$('#search').click(function(){
			$.ajax({
				url: '/jing/getNum',
				type: 'post',
				dataType: 'json',
				data: {
					word: $('input[name="word"]').val(),
					left_num: $('input[name="left_num"]').val(),
					right_num: $('input[name="right_num"]').val(),
					download_num: $('input[name="download_num"]').val()
				},
				success: function(data) {
					$('#numModal').modal('show');
					$('#num').html(data.num);
					window.num = data.num;
				}

			})
		})

		$('#download').click(function(){
			// $('#numModal').modal('hide');
			$('#download').attr('disabled', 'disabled');
			$('#cancle').attr('disabled', 'disabled');

			$('#tishi').show().html('正在生成文件，请不要关闭网页...');
			// $('#loading').css('width', '50%');
			ajaxSetFile();
		})

		function ajaxSetFile(txt='', group='', n='') {
			var skip = parseInt(parseInt($('input[name="download_num"]').val())/50);
			if (txt) {
				$.ajax({
					url: '/jing/getData',
					type: 'post',
					dataType: 'json',
					data: {
						word: $('input[name="word"]').val(),
						left_num: $('input[name="left_num"]').val(),
						right_num: $('input[name="right_num"]').val(),
						download_num: $('input[name="download_num"]').val(),
						num: window.num,
						txt: txt,
						group: group,
						n: n
					},
					success: function(data) {
						if (data.result) {
							var precent = parseInt(parseInt(data.n)*skip*100/parseInt($('input[name="download_num"]').val()));
							precent = precent > 100 ? 100:precent;
							$('#loading').css('width', '' + precent + '%').html('' + precent + '%');
							console.log('' + precent + '%');
							ajaxSetFile(data.txt, data.group, data.n);
						} else {
							$('#tishi').show().html('生成文件完成！');

							window.open("http://www.zhangxianjian.com/downloadTxt/"+data.txt);
						}
					},
					error: function(data) {
						alert('网页生成失败，请刷新网页重试！');
					}
				})
			} else {
				$.ajax({
					url: '/jing/getData',
					type: 'post',
					dataType: 'json',
					data: {
						word: $('input[name="word"]').val(),
						left_num: $('input[name="left_num"]').val(),
						right_num: $('input[name="right_num"]').val(),
						download_num: $('input[name="download_num"]').val(),
						num: window.num
					},
					success: function(data) {
						if (data.result) {
							var precent = parseInt(parseInt(data.n)*2000/parseInt($('input[name="download_num"]').val()));
							precent = precent > 100 ? 100:precent;
							$('#loading').css('width', '' + precent + '%').html('' + precent + '%');
							ajaxSetFile(data.txt, data.group, data.n);
						} else {
							console.log('结束2');
						}
					}
				})
			}
		}
	</script>
</body>
</html>