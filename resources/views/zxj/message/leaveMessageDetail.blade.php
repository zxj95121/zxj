@extends('zxj.layout')

@section('title', '后台管理首页')


@section('style')
<style type="text/css">
#lmdt li{
	font-size: 18px;
}
</style>
@endsection

@section('content')
            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title"><a @if($type==1) href="/zxj/leaveMessage/notRead" @else href="/zxj/leaveMessage/all" @endif><button type="button" class="btn btn-info m-b-5"><i class="ion-arrow-left-c"></i> 返回上一级</button></a></h3> 
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">留言详情</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    	<div class="md-content">
                                    		<table class="table_listDetail table table-striped">
                                    			<thead></thead>
                                    			<tbody>
                                    				<tr>
                                    					<td class="col-md-2"><strong>姓名</strong><span class="fa fa-circle text-info pull-left"></span></td>
                                    					<td>{{$message->name}}</td>
                                    				</tr>
                                    				<tr>
                                    					<td><strong>qq</strong><span class="fa fa-circle text-info pull-left"></span></td>
                                    					<td>{{$message->qq}}</td>
                                    				</tr>
                                    				<tr>
                                    					<td><strong>手机号</strong><span class="fa fa-circle text-info pull-left"></span></td>
                                    					<td>{{$message->tel}}</td>
                                    				</tr>
                                    				<tr>
                                    					<td><strong>地址</strong><span class="fa fa-circle text-info pull-left"></span></td>
                                    					<td>{{$message->address}}</td>
                                    				</tr>
                                    				<tr>
                                    					<td><strong>留言时间</strong><span class="fa fa-circle text-info pull-left"></span></td>
                                    					<td>{{$message->created_at}}</td>
                                    				</tr>
                                    				<tr>
                                    					<td><strong>内容</strong><span class="fa fa-circle text-info pull-left"></span></td>
                                    					<td>{{$message->message}}</td>
                                    				</tr>
                                    			</tbody>
                                    		</table>
                                    		
	                                        
		                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end row -->


            </div>

@endsection

@section('script')
<script type="text/javascript">
	$('.lyUl').parent().addClass('active');
	@if($type==1)
		$('.lyUl li:eq(0)').addClass('active');
	@else
		$('.lyUl li:eq(1)').addClass('active');
	@endif
</script>
@endsection