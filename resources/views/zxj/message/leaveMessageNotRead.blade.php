@extends('zxj.layout')

@section('title', '后台管理首页')


@section('style')
<style type="text/css">
	#paginateTr ul{
		margin: 0px;
		display: inline-block;
	}
</style>
@endsection

@section('content')
            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">未读留言</h3> 
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">未读简介</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#id</th>
                                                        <th>Name</th>
                                                        <th>time</th>
                                                        <th>qq</th>
                                                        <th>tel</th>
                                                        <th>operate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	@foreach($message as $value)
                                                    <tr>
                                                        <td>{{$value->id}}</td>
                                                        <td>{{$value->name}}</td>
                                                        <td>{{$value->created_at}}</td>
                                                        <td>{{$value->qq}}</td>
                                                        <td>{{$value->tel}}</td>
                                                        <td><a href="/zxj/leaveMessage/detail/{{$value->id}}/1"><button type="button" class="btn btn-info m-b-5">查看详情</button></a></td>
                                                    </tr>
                                                    @endforeach
                                                    <tr id="paginateTr"><td colspan="6" style="text-align: center;">{{ $message->links() }}<h5 style="display: inline-block;position: relative;top: -12px;user-select: none;">共{{$message->count()}}条记录</h5></td>
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