@extends('zxj.layout')

@section('title', '后台管理首页')

@section('style')
<script type="text/javascript">
	var result = '{!!$message!!}';
	var param = '{!!$param!!}';
	var token = '{{csrf_token()}}';
</script>
@endsection

@section('content')
            <div class="wraper container-fluid" id="bodytable">
                  <div class="page-title"> 
                </div>
            </div>


            <script type="text/javascript" src="/js/leaveMessageAll.js"></script>
@endsection

@section('script')
			<script type="text/javascript">
            	$('button[data-target="select"]').click(function(){
            		window.location.href = '/zxj/leaveMessage/detail/'+$(this).parents('tr').attr('data-id')+'/2';
            	})
            </script>
@endsection