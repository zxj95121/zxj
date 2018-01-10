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
        </div>
    </div>
@endsection

@section('script')
	<script type="text/javascript">
    </script>
@endsection