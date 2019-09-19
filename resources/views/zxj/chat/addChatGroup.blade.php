@extends('zxj.layout')

@section('title', '添加新群聊')

@section('style')
<script type="text/javascript">
	var token = '{{csrf_token()}}';
</script>
@endsection

@section('content')
    <div class="wraper container-fluid" id="bodytable">
        <div class="page-title">
        	<div class="form-group col-md-6">
        		<div class="col-md-4" style="text-align: right;height: 100%;">
        			<label for="group_name">群聊名称</label>
        		</div>
        		<div class="col-md-8">
        			<input class="form-control" id="group_name" type="text" />
        		</div>
        	</div>
        </div>
    </div>
@endsection

@section('script')
	<script type="text/javascript">
    </script>
@endsection