<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
     <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <title>星际畅游</title>
    <link rel="stylesheet" type="text/css" href="/all/admin/css/bootstrap.css">

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <link href="/plugin/fileUpload/css/iconfont.css" rel="stylesheet" type="text/css" />
    <link href="/plugin/fileUpload/css/fileUpload.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .uploadFileBt{
            display: none;
        }
    </style>

</head>
<body>
<!--在这里编写你的代码-->
    <h3> </h3>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">视频介绍（十个字以内）</label>
                <input type="text" class="form-control" id="desc" placeholder="介绍">
            </div>
        </form>
        <div id="fileUploadContent" class="fileUploadContent"></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="startUpload">开始上传</button>
        </div>
    </div>
    

    <script type="text/javascript" src="/all/home/js/jquery.min.js"></script>
    <script type="text/javascript" src="/all/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/all/win10-ui/component/layer-v3.0.3/layer/layer.js"></script>

    <script type="text/javascript" src="/plugin/fileUpload/js/fileUpload.js"></script>
    <script type="text/javascript">

        $.ajaxSetup({
            'headers': {
                'X-CSRF-TOKEN': '{{csrf_token()}}'
            }
        })

        $('#startUpload').click(function(){
            if (!$('#desc').val()) {
                return false;
            }

            $('.uploadFileBt')[0].click();
        })

        $("#fileUploadContent").initUpload({
            "uploadUrl": "/father/ajaxVideo",//上传文件信息地址
            "size": 101376,//文件大小限制，单位kb,限制99M
            "maxFileNumber":2,//文件个数限制，为整数
            //"filelSavePath":"",//文件上传地址，后台设置的根目录
            "beforeUpload": beforeUploadFun,//在上传前执行的函数
            "onUpload": onUploadFun,//在上传后执行的函数
            //autoCommit:true,//文件是否自动上传
            "fileType": ['avi', 'mpg', 'wmv', 'mp4', 'rmvb', 'png', 'jpeg', 'gif', 'jpg']//文件类型限制，默认不限制，注意写的是文件后缀
        });

        function beforeUploadFun(opt) {
            opt.otherData = [{ "name": "desc", "value": $('#desc').val() }];
            // window.layerIndex = layer.load(1, { time: 10 * 1000, shade: false });
            console.log(opt);
            //防止多次上传
            window.waitLayer = layer.load(2);
            $('#startUpload').addClass('disabled');
        }

        
        function onUploadFun(opt, data) {
            
            console.log(data);
            // layer.close(window.layerIndex);
            if (data.errcode == 0) {
                // $('#close_add')[0].click();
                layer.msg('上传成功');
                setTimeout(function(){
                    window.frameElement.src = '/father/shareVideo?id='+data.id;
                }, 1000)
            } else {
                // $('#close_add')[0].click();
                layer.msg('图片上传失败，请联系管理员。');
            }

            layer.close(window.waitLayer);
            $('#startUpload').removeClass('disabled');

            uploadTools.uploadError(opt);//显示上传错误
            uploadTools.uploadSuccess(opt);//显示上传成功
        }
    </script>
</body>
</html>