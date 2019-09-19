@extends('zxj.layout')

@section('title', '食物照片')

@section('style')
	<link href="/all/admin/fileUpload/css/iconfont.css" rel="stylesheet" type="text/css"/>
	<link href="/all/admin/fileUpload/css/fileUpload.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
	var token = '{{csrf_token()}}';
</script>
@endsection

@section('content')
    <div class="wraper container-fluid" id="bodytable">
        <div class="page-title">
        	<h3>食物照片<button class="btn btn-success" style="margin-left: 25px;" id="addBtn">添加照片</button></h3>
        </div>
    </div>

    <div id="add" class="modal fade" tabindex="-1" role="dialog">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title">添加食物照片</h4>
      			</div>
      			<div class="modal-body">
        			<div id="fileUploadContent" class="fileUploadContent"></div>
        			<!-- <button onclick="testUpload()">提交</button> -->
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-default" data-dismiss="modal">确定添加</button>
      			</div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@endsection

@section('script')
	<script type="text/javascript" src="/all/admin/fileUpload/js/fileUpload.js"></script>
	<script type="text/javascript">
		$('#addBtn').click(function(){
			$('#add').modal('show');
		})
		$.ajaxSetup({
			'headers': {
				'X-CSRF-TOKEN': token
			}
		})

		$("#fileUploadContent").initUpload({
	        "uploadUrl":"/zxj/photos/foods/foodsUpload",//上传文件信息地址
	        //"size":350,//文件大小限制，单位kb,默认不限制
	        //"maxFileNumber":3,//文件个数限制，为整数
	        //"filelSavePath":"",//文件上传地址，后台设置的根目录
	        "beforeUpload":beforeUploadFun,//在上传前执行的函数
	        "onUpload":onUploadFun,//在上传后执行的函数
	        //autoCommit:true,//文件是否自动上传
	        "fileType":['png','jpg','jpeg','gif']//文件类型限制，默认不限制，注意写的是文件后缀
	    });

	    function beforeUploadFun(opt){
	        opt.otherData =[{"name":"name","value":"zxm"}];
	        console.log(opt);
	    }
	    function onUploadFun(opt,data){
	    	console.log(data);
	        uploadTools.uploadError(opt);//显示上传错误
	        uploadTools.uploadSuccess(opt);//显示上传成功
	    }
	    
	    // function testUpload(){
	    // 	var opt = uploadTools.getOpt("fileUploadContent");
	    // 	uploadEvent.uploadFileEvent(opt);
	    // }

    </script>
@endsection